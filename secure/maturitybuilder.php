<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>

<body>
<?php include('tabcontent.php'); ?>
<?php include('get_member_info.php'); ?>
<?php include('menu.php'); ?>

<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <div class="box-header">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-12">
                        <span><i class="fa fa-road"></i> <b><?php echo $companyname; ?>'s Maturity Builder -</b> <em>This is How We Define our Maturity</em></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-12">
            <hr>
                <p class="text-left margin">
                    This is the Maturity Builder<br><br>
                        We define our maturity in terms of our:

                    <br>
                    Process Level, Policy Level, Documentation Level, and Automation Level are used to define a Maturity<br>
<table border="1" width="90%" cellspacing="2" cellpadding="2"><tr><th>Process</th><th>Value</th><th>Policy Level</th><th>Value</th><th>Documentation Level</th><th>Value,</th><th>Automation Level</th><th>Value</th></tr>
                    <tr><td>None</td><td>0%	</td><td>None</td><td>0%	</td><td>None</td><td>0%	</td><td>None</td><td>0%</td></tr>
                    <tr><td>Inconsistent</td><td>10%	</td><td>Informal</td><td>5%	</td><td>Informal</td><td>5%	</td><td>Partial</td><td>5%</td></tr>
                    <tr><td>Repeatable</td><td>20%	</td><td>Defined</td><td>10%	</td><td>Formal</td><td>10%	</td><td>Full</td><td>10%</td></tr>
                    <tr><td>Standardized</td><td>30%	</td><td>Audited</td><td>15%	</td><td>Metrics and Reporting</td><td>15%	</td><td>Unavailable</td><td>10%</td></tr>
                    <tr><td>Measured</td><td>40%	</td><td>Embedded</td><td>20%	</td><td>Improvement Process</td><td>20%</td></tr>
                    <tr><td>Optimized</td><td>50%</td></tr>
                </table>
                The taxonomy of operational cyber security risks, summarized in Table 1 and detailed in this section, is structured around a hierarchy of classes, subclasses, and elements. The taxonomy has four
                main classes:<br>
                People: actions of people—action, or lack of action, taken by people either deliberately or accidentally that impact cybersecurity<br>
                Processes: failed internal processes—problems in the internal business processes that impact the ability
                to implement, manage, and sustain cyber security, such as process design, execution, and
                control<br>
                Technology: systems and technology failures—failure of hardware, software, and information systems<br>
                Ecosystem: external events—issues often outside the control of the organization, such as disasters, legal
                issues, business issues, and service provider dependencies<br>
                Each of these four classes is further decomposed into subclasses, and each subclass is described
                by its elements.<br><br>
                <img src="taxonomy.png">
                <hr>


                <a href="http://130.18.86.27/faculty/warkentin/SecurityPapers/Merrill/AlbertsDorofee_OCTAVEThreatProfiles.pdf">OCTAVE Assessment Tool</a><br>
                Asset, Actor, Motive (opt), Access (opt), Outcome<br>
                asset – something of value to the organization (information in electronic or physical form,
                information systems, a group of people with unique expertise)<br>
                · actor – who or what may violate the security requirements (confidentiality, integrity, availability)
                of an asset. Actors can be from inside or outside the organization.<br>
                · motive (optional) – indication of whether the actor’s intentions are deliberate or accidental<br>
                · access (optional) – how the asset will be accessed by the actor (network access, physical access)<br>
                · outcome – the immediate result of violating the security requirements of an asset (disclosure,
                modification, destruction, loss, interruption)<br>

                <br>
                In the OCTAVE Method, the analysis team creates threat scenarios based on known sources of threat and
                typical threat outcomes. Threats with a common theme can be grouped together. During OCTAVE, the
                following standard categories of threat are considered:<br>
                · human actors using network access – The threats in this category are network-based threats to an
                organization’s critical assets. They require direct action by a person and can be deliberate or
                accidental in nature.<br>
                · human actors using physical access – The threats in this category are physical threats to an
                organization’s critical assets. They require direct action by a person and can be deliberate or
                accidental in nature.<br>
                · system problems – The threats in this category are problems with an organization’s information
                technology systems. Examples include hardware defects, software defects, unavailability of
                related enterprise systems, viruses, malicious code, and other system-related problems.<br>
                · other problems – The threats in this category are problems or situations that are outside the
                control of an organization. This category of threats includes natural disasters (such as floods,
                earthquakes, and storms) that can affect an organization’s information technology systems as well
                as interdependency risks. Interdependency risks include the unavailability of critical
                infrastructures (telecommunications, electricity, etc.). Other types of threats outside the control of
                an organization can also be included here. Examples of these threats are power outages, broken
                water pipes, etc.
                <br><br>


                An organization usually has some control over humans accessing assets over a computer network or by
                physical means, as well as some control over system problems. The category of other problems is used for
                those that tend to fall outside the control of the organization. In this category, the effects of the threat can
                be controlled to some extent, but the source of the threat cannot be controlled.<br>
                The resulting outcome or effect of these threat scenarios typically falls into these categories:<br>
                · disclosure or viewing of sensitive information<br>
                · modification of important or sensitive information<br>
                · destruction or loss of important information, hardware, or software<br>
                · interruption of access to important information, software, applications, or services<br>
                <br><br>
                <img src="octave.png">
                <hr>




                <pre>                    People:
                    1.1 Inadvertent (generally by insiders)
                    1.1.1 Mistakes
                    1.1.2 Errors
                    1.1.3 Omissions
                    1.2 Deliberate (by insiders or outsiders))
                    1.2.1 Fraud
                    1.2.2 Sabotage
                    1.2.3 Theft
                    1.2.4 Vandalism
                    1.3 Inaction  (generally by insiders)
                    1.3.1 Skills
                    1.3.2 Knowledge
                    1.3.3 Guidance
                    1.3.4 Availability

                    Technology
                    2.1 Hardware
                    2.1.1 Capacity
                    2.1.2 Performance
                    2.1.3 Maintenance
                    2.1.4 Obsolescence
                    2.2 Software
                    2.2.1 Compatibility
                    2.2.2 Configuration
                    management
                    2.2.3 Change control
                    2.2.4 Security settings
                    2.2.5 Coding practices
                    2.2.6 Testing
                    2.3 Systems
                    2.3.1 Design
                    2.3.2 Specifications
                    2.3.3 Integration
                    2.3.4 Complexity

                    Processes:
                    3.1 Process design or
                    execution
                    3.1.1 Process flow
                    3.1.2 Process
                    documentation
                    3.1.3 Roles and
                    responsibilities
                    3.1.4 Notifications and
                    alerts
                    3.1.5 Information flow
                    3.1.6 Escalation of issues
                    3.1.7 Service level
                    agreements
                    3.1.8 Task hand-off
                    3.2 Process controls
                    3.2.1 Status monitoring
                    3.2.2 Metrics
                    3.2.3 Periodic review
                    3.2.4 Process ownership
                    3.3 Supporting processes
                    3.3.1 Staffing
                    3.3.2 Funding
                    3.3.3 Training and
                    development
                    3.3.4 Procurement

                    Ecosystem
                    4.1 Disasters
                    4.1.1 Weather event
                    4.1.2 Fire
                    4.1.3 Flood
                    4.1.4 Earthquake
                    4.1.5 Unrest
                    4.1.6 Pandemic
                    4.2 Legal issues
                    4.2.1 Regulatory compliance
                    4.2.2 Legislation
                    4.2.3 Litigation
                    4.3 Business issues
                    4.3.1 Supplier failure
                    4.3.2 Market conditions
                    4.3.3 Economic
                    conditions
                    4.4 Service
                    dependencies
                    4.4.1 Utilities
                    4.4.2 Emergency services
                    4.4.3 Fuel
                    4.4.4 Transportation
</pre>
                <br><a href="https://resources.sei.cmu.edu/asset_files/TechnicalNote/2014_004_001_91026.pdf">Click for Reference</a><br>









                </p>
            </div>
        </div>
</div>
    </div>
</div>

<!-- main-footer -->
<?php include('main_footer.php'); ?>
<!-- ./wrapper -->
<script type="text/javascript">
    $(document).ready(function () {
        $('head').append('<link href="/chrome.css" rel="stylesheet" />');
    });
</script>
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>

</body>
</html>
