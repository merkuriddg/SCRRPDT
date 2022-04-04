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
                        <span><i class="fa fa-road"></i> <b>Octave -</b> <em>This is an Risk Evaluation for Cybersecurity</em></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="text-left margin">
                    The Operationally Critical Threat, Asset, and Vulnerability EvaluationSM (OCTAVE) is an information
                    security risk evaluation that is comprehensive, systematic, and context driven. By following the
                    OCTAVE Method, an organization can make information-protection decisions based on risks to the
                    confidentiality, integrity, and availability of critical information technology (IT) assets. The operational or
                    business units and the IT department work together to address the information security needs of the
                    organization.
                    <img src="octave.png">
                </p>
            </div>
            <div class="col-lg-6">

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
