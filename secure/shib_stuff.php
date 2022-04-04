<?php
echo "PHPAuth:".strtoupper($_SERVER["PHP_AUTH_USER"]);
echo "<HR>";

$securetigeruser=strtoupper($_SERVER["PHP_AUTH_USER"]);
echo "Squirrel: ".$securetigeruser;
echo "<HR>";
$now=date("c");
$start=$_SERVER["Shib-Authentication-Instant"];
echo "  Now: ".$now;
echo "<HR>";
echo "Start: ".$start;
echo "<HR>";
echo "Epoch  Now: ".time($now);
echo "<HR>";
echo "EpochStart: ".time($start);
//if ($_SERVER["Shib-Authentication-Instant"]>1) { echo "hey";];
echo "<HR>";
echo "Url: ".$_SERVER["Shib-Identity-Provider"];
echo "<HR>";

// Declare and define two dates
$date1 = strtotime($start);
$date2 = strtotime($now);

// Formulate the Difference between two dates
$diff = abs($date2 - $date1);


// To get the year divide the resultant date into
// total seconds in a year (365*60*60*24)
$years = floor($diff / (365*60*60*24));


// To get the month, subtract it with years and
// divide the resultant date into
// total seconds in a month (30*60*60*24)
$months = floor(($diff - $years * 365*60*60*24)
    / (30*60*60*24));


// To get the day, subtract it with years and
// months and divide the resultant date into
// total seconds in a days (60*60*24)
$days = floor(($diff - $years * 365*60*60*24 -
        $months*30*60*60*24)/ (60*60*24));


// To get the hour, subtract it with years,
// months & seconds and divide the resultant
// date into total seconds in a hours (60*60)
$hours = floor(($diff - $years * 365*60*60*24
        - $months*30*60*60*24 - $days*60*60*24)
    / (60*60));


// To get the minutes, subtract it with years,
// months, seconds and hours and divide the
// resultant date into total seconds i.e. 60
$minutes = floor(($diff - $years * 365*60*60*24
        - $months*30*60*60*24 - $days*60*60*24
        - $hours*60*60)/ 60);


// To get the minutes, subtract it with years,
// months, seconds, hours and minutes
$seconds = floor(($diff - $years * 365*60*60*24
    - $months*30*60*60*24 - $days*60*60*24
    - $hours*60*60 - $minutes*60));

// Print the result
printf("%d years, %d months, %d days, %d hours, "
    . "%d minutes, %d seconds", $years, $months,
    $days, $hours, $minutes, $seconds);
echo "<HR>";
if ($minutes>=10){
    echo "10 min warning";
    $_SESSION["loggedin"]="10";
}
if ($minutes>=20){echo "20 min warning";}
if ($minutes>=30){echo "30 min warning";}
if ($minutes>=40){echo "40 min warning";}
if ($minutes>=50){echo "50 min warning";}
if ($minutes>=60){echo "60 min warning";}
echo "<HR>";
echo $_SESSION["loggedin"];
echo "<HR>";
//move out of session if longer than X mins...
//https://ithelp.brown.edu/kb/articles/shibboleth-and-application-logout-best-practices

foreach($_SERVER as $key_name => $key_value) {
    print $key_name . " = " . $key_value . "<br>";
}
//Eg. Check for https://sso.brown.edu/idp/shibboleth" in the Shib-Identity-Provider


/* Another useful attribute passed to Shibboleth SPs is the Shib-Authentication-Instant attribute.
This indicates when the user last authenticated at the IDP.
This is a convenient way to determine when a user last authenticated.
If an application has strict security requirements,
you can choose to only accept Shibboleth sessions that indicate recent authentication,
where 'recent' is in the eye of the beholder.

*/
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

while (list($var,$value) = each ($_SERVER)) {
    echo "$var => $value <br />";
}
?>
<hr>


Shib notes:
https://confluence.cad.rit.edu/display/RITPUBLIC/CIAS+Shibboleth+Attribute+Usage

https://github.com/audiolion/django-shibauth-rit

https://github.com/ritstudentgovernment/passport-saml-example


.htaccess
---------------
# Ensure https is on. required for shibboleth auth
RewriteCond ${HTTPS} off
RewriteRule (.*) https://%{HTTP_HOST} [R,L]

# Two options, lazy loading where people do not need to authenticate to get to your site
<If "%{HTTPS} == 'on'">
SSLRequireSSL
AuthType shibboleth
Require shibboleth
ShibRequestSetting requireSession false
ShibRedirectToSSL 443
</If>

# Or no lazy loading, strict requirement of shib authentication before accesing site
<If "%{HTTPS} == 'on'">
SSLRequireSSL
AuthType shibboleth
ShibRequireSession On
require valid-user
# see https://www.rit.edu/webdev/authenticating-and-authorizing-rit-users for other require options
</If>

Authenticating and Authorizing RIT Users
Logout rpmbbu
The RIT Web Environment allows you to use RIT's single sign on authentication service to authenticate and authorize users, through their RIT Computer Accounts, for access to content on your web site. Apache's .htaccess file mechanism is used to limit access to websites. All authentication/authorization should be done over an encrypted channel (i.e. the https protocol.)

Creating the .htaccess file
Create a file like the following in the directory you wish to protect. The file should be named .htaccess. This will protect all files in the directory and all directories underneath this directory that are still in your site. It will not, however, protect content in other sites. This file will need to be readable by the web server (username www).

Allow only listed RIT Computer Accounts

ShibRedirectToSSL 443
AuthType shibboleth
ShibRequireSession on
require user username1 username2 username3
Restrict access to specific segments of the RIT population

ShibRedirectToSSL 443
AuthType shibboleth
ShibRequireSession on
require shib-attr ritEduAffiliation Student
require shib-attr ritEduAffiliation Employee
require shib-attr ritEduAffiliation Alumni
Other values include, but are not limited to, Alumni, Trustee, and StudentWorker.

Accessing User Attributes
In addition to authenticating users, Shibboleth can also provide a site with information about a logged in user by way of RIT directory attributes. These attributes can be accessed through the environment variables of scripts running on the site (PHP scripts can access these through the $_SERVER array).

The following attributes are available to all applications on the web environment that use Shibboleth:

uid - the user's RIT username
givenName - the user's given (first) name
sn -the user's surname (last/family name)
mail - the user's email address
ritEduMemberOfUid - groups the account is a member of (Ex: forklift-operators, vendingmach-admins, historyintegrator, etc.)
ritEduAffiliation - multi-valued attribute showing relationship to RIT (Ex: Student, Employee, StudentWorker, Retiree, etc.)
Note: Additional attributes can be configured on a site-by-site basis. Please contact the ITS Service Desk with requests for additional attributes.

The following PHP script will display the name of the logged in user:

<?php
echo "Hello, {$_SERVER['givenName']} {$_SERVER['sn']}<br />";
?>







Context Processors
There are two context processors included which allow you to place {{ login_link }} or {{ logout_link }} in your templates for routing users to the login or logout page. These are available as a convenience and are not required. To activate, add the following to your settings:

TEMPLATES = [
{
...
'OPTIONS': {
'context_processors': [
...
'shibauth_rit.context_processors.login_link',
'shibauth_rit.context_processors.logout_link',
...
],
},
...
},
]