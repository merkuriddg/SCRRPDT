<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <title>SCRRPDT</title>
</head>
<body>

<?php
if (isset($_SERVER['uid'])) {
    #    echo "<br>0: ";
    $uid = $_SERVER['uid'];
    $_SESSION['uid'] = $_SERVER['uid'];
#    echo "<br>1: ";
    $unique_id = $_SERVER['UNIQUE_ID'];
    $_SESSION['UNIQUE_ID'] = $_SERVER['UNIQUE_ID'];
#    echo "<br>2: ";
    $shib_sess = $_SERVER['Shib-Session-ID'];
    $_SESSION['Shib-Session-ID'] = $_SERVER['Shib-Session-ID'];
#    echo "<br>3: ";
    $php_sess = $_COOKIE['PHPSESSID'];
    $_SESSION['PHPSESSID'] = $_COOKIE['PHPSESSID'];
#    echo "<br>4: ";
    $https = $_SERVER['HTTPS'];
    $_SESSION['HTTPS'] = $_SERVER['HTTPS'];
#    echo "<br>5: ";
    $full_code = $_SERVER['HTTPS'] . $_SERVER['uid'] . $_SERVER['UNIQUE_ID'] . $_SERVER['Shib-Session-ID'] . $_COOKIE['PHPSESSID'] . $_SERVER['HTTPS'];
    $_SESSION['full_code'] = $full_code;
#    echo "<hr>";
    $_SESSION['css'] = "RIT";

# Insert into db as authenticated user
# Connect to the database
    require_once('../../includes/config.php');
    $insertSQL = "insert into saml_auth (uid, unique_id, shib_sess, php_sess, full_code) values ('" . $uid . "','" . $unique_id . "','" . $shib_sess . "','" . $php_sess . "','" . $full_code . "');";
 #   echo $insertSQL;
    $result = mysqli_query($con, $insertSQL) or die("Query fail: " . mysqli_error($con));

 /*   phpinfo(32);
    echo "<hr>";
    echo "<pre>";
    print_r(get_defined_vars());
    echo "</pre>";
*/
echo "<img src=\"walking_tiger.gif\">";
header ("location:/SCRRPDT/secure/");
    exit;
}
else {
    echo "SORRY";
    header ("location:https://cyber.rit.edu/");
    exit;
}
?>


<!-- Default Statcounter code for SCRRPDT
<script type="text/javascript">
    var sc_project=11957575;
    var sc_invisible=1;
    var sc_security="22dd37e9";
</script>
<script type="text/javascript"
        src="https://www.statcounter.com/counter/counter.js"
        async></script>
<noscript><div class="statcounter"><a title="free web stats"
                                      href="https://statcounter.com/" target="_blank"><img
                    class="statcounter"
                    src="https://c.statcounter.com/11957575/0/22dd37e9/1/"
                    alt="free web stats"></a></div></noscript>
<!-- End of Statcounter Code -->
</body>
</html>