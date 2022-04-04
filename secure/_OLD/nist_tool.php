<!--
So I can build a profile management tool that they can also Align the Functions, Categories, and Subcategories to there own Business Profiles:
- Business Requirements
- Risk Tolerance
- Organization Resources
To establish a roadmap for reducing cybersecurity risk that is well aligned with organizational and sector goals, considers legal/regulatory requirements and industry best practices, and reflects risk management priorities.

They can build a Current Profile and a Target Profile
So where are you, where do you want to go, and how will you get there.

Current Profile - Where you are currently
Target Profile - Where you want to be
Roadmap Profile - How you are going to get there (Observe, Prioritize, Execute)

Overcome 'Analysis Paralysis' - OODA Loops...etc. OPE


I see a tool that allows me to Observe, Prioritize, Execute based on the
1. Framework Core (Potential Outcomes): Functions, Categories, and Subcategories (Current Profile Measures)
2. Defined as Business Profiles  (Current Profile)
3. And allows me to determine the Tier (Target Profile)
- Risk Management Process
- Integrated Risk Management Program
- External Participation

The executive level communicates the mission priorities, available resources, and overall risk tolerance to the business/process level.
The business/process level uses the information as inputs into the risk management process, and then collaborates with the implementation/operations level to communicate business needs and create a Profile.
The implementation/operations level communicates the Profile implementation progress to the business/process level. The business/process level uses this information to perform an impact assessment. Business/process level management reports the outcomes of that impact assessment to the executive level to inform the organization’s overall risk management process and to the implementation/operations level for awareness of business impact.

Tabs:
Business Profiles - New/Edit/Delete/View
- Current Profile - Where you are currently based on
    • Functions
    • Categories
    • Subcategories
- Target Profile - Where you want to be
    • Risk Management Process
    • Integrated Risk Management Program
    • External Participation
- Roadmap Profile - How you are going to get there (Observe, Prioritize, Execute)

NIST
- ID
- PR
- DE
- RS
- RC

CRR
- Risk
- Resilience

https://medium.com/@jeffrisandy/10-lessons-from-extreme-ownership-30e97e4bedc


-->







<?php
require_once('../includes/config.php');
include('logged_in.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<?php include('tabcontent.php'); ?>
<?php include('set_date.php'); ?>
<?php include('get_member_info.php'); ?>
<?php include('check_first_login.php'); ?>
<?php include('menu.php'); ?>


<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Profiles<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#new">New Profile...</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#current">Current Profiles</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#target">Target Profiles</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#roadmap">Roadmap</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            NIST<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#identify">Identify</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#protect">Protect</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#detect">Detect</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#respond">Respond</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#recover">Recover</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Resources</a></li>
                        </ul>
                    </li>
                    <li><a href="#overall" data-toggle="tab">CRR</a></li>
                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
            </div>

                <div class="tab-content">
<!-- ################################################################################################################################################ -->
                    <div id="profiles" class="tab-pane active">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Profiles
                                    </div>
                                    <div class="panel-body">
                                        <p class="nist-title">Arr Aye Tea has created the following Business Profiles:
                                        <ul>
                                            <li>
                                                <a href="">Profile 002: our exec plan</a>
                                            </li>
                                            <li>
                                                <a href="">Profile 005: our communications plan</a>
                                            </li>
                                            <li>
                                                Current Profiles - Where you are currently based on Functions, Categories and Subcategories
                                            </li>
                                            <li>
                                                Target Profiles - Where you want to be based on a Risk Management Process, Integrated Risk Management Program, and External Participation
                                            </li>
                                            <li>
                                                Roadmap Profiles - How you are going to get there based on Observe, Prioritize and Execute
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- ################################################################################################################################################ -->
                        <!-- ################################################################################################################################################ -->
                        <div id="identify" class="tab-pane">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Identify
                                        </div>
                                        <div class="panel-body">
                                            <div class="panel-body">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                                    <tr align="left" style="border-top: 2px darkgray solid;"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-title"><br>Asset Management</td></tr><tr align="left"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-left">The data, personnel, devices, systems, and facilities that enable the organization to achieve business purposes are identified and managed consistent with their relative importance to business objectives and the organization?s risk strategy.</td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.AM-1">ID.AM-1</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Physical devices and systems within the organization are inventoried</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.AM-1">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.AM-2">ID.AM-2</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Software platforms and applications within the organization are inventoried</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.AM-2">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.AM-3">ID.AM-3</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Organizational communication and data flows are mapped</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.AM-3">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.AM-4">ID.AM-4</a></td><td align="left" width="80%" valign="left" class="td-nist-left">External information systems are catalogued</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.AM-4">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.AM-5">ID.AM-5</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Resources (e.g., hardware, devices, data, and software) are prioritized based on their classification, criticality, and business value </td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.AM-5">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.AM-6">ID.AM-6</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Cybersecurity roles and responsibilities for the entire workforce and third-party stakeholders (e.g., suppliers, customers, partners) are established</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.AM-6">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-top: 2px darkgray solid;"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-title"><br>Business Environment</td></tr><tr align="left"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-left">The organization?s mission, objectives, stakeholders, and activities are understood and prioritized; this information is used to inform cybersecurity roles, responsibilities, and risk management decisions.</td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.BE-1">ID.BE-1</a></td><td align="left" width="80%" valign="left" class="td-nist-left">The organization?s role in the supply chain is identified and communicated</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.BE-1">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.BE-2">ID.BE-2</a></td><td align="left" width="80%" valign="left" class="td-nist-left">The organization?s place in critical infrastructure and its industry sector is identified and communicated</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.BE-2">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.BE-3">ID.BE-3</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Priorities for organizational mission, objectives, and activities are established and communicated</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.BE-3">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.BE-4">ID.BE-4</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Dependencies and critical functions for delivery of critical services are established</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.BE-4">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.BE-5">ID.BE-5</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Resilience requirements to support delivery of critical services are established</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.BE-5">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-top: 2px darkgray solid;"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-title"><br>Governance</td></tr><tr align="left"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-left">The policies, procedures, and processes to manage and monitor the organization?s regulatory, legal, risk, environmental, and operational requirements are understood and inform the management of cybersecurity risk.</td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.GV-1">ID.GV-1</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Organizational information security policy is established</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.GV-1">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.GV-2">ID.GV-2</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Information security roles & responsibilities are coordinated and aligned with internal roles and external partners</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.GV-2">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.GV-3">ID.GV-3</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Legal and regulatory requirements regarding cybersecurity, including privacy and civil liberties obligations, are understood and managed</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.GV-3">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.GV-4">ID.GV-4</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Governance and risk management processes address cybersecurity risks</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.GV-4">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-top: 2px darkgray solid;"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-title"><br>Risk Assessment</td></tr><tr align="left"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-left">The organization understands the cybersecurity risk to organizational operations (including mission, functions, image, or reputation), organizational assets, and individuals.</td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.RA-1">ID.RA-1</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Asset vulnerabilities are identified and documented</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.RA-1">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.RA-2">ID.RA-2</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Threat and vulnerability information is received from information sharing forums and sources</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.RA-2">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.RA-3">ID.RA-3</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Threats, both internal and external, are identified and documented</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.RA-3">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.RA-4">ID.RA-4</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Potential business impacts and likelihoods are identified</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.RA-4">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.RA-5">ID.RA-5</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Threats, vulnerabilities, likelihoods, and impacts are used to determine risk</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.RA-5">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.RA-6">ID.RA-6</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Risk responses are identified and prioritized</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.RA-6">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-top: 2px darkgray solid;"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-title"><br>Risk Management Strategy</td></tr><tr align="left"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-left">The organization?s priorities, constraints, risk tolerances, and assumptions are established and used to support operational risk decisions.</td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.RM-1">ID.RM-1</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Risk management processes are established, managed, and agreed to by organizational stakeholders</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.RM-1">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.RM-2">ID.RM-2</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Organizational risk tolerance is determined and clearly expressed</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.RM-2">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.RM-3">ID.RM-3</a></td><td align="left" width="80%" valign="left" class="td-nist-left">The organization?s determination of risk tolerance is informed by its role in critical infrastructure and sector specific risk analysis</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.RM-3">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-top: 2px darkgray solid;"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-title"><br>Supply Chain Risk Management</td></tr><tr align="left"><td align="left" colspan="3" width="100%" valign="left" class="td-nist-left">The organization?s priorities, constraints, risk tolerances, and assumptions are established and used to support risk decisions associated with managing supply chain risk. The organization has in place the processes to identify, assess and manage supply c</td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.SC-1">ID.SC-1</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Cyber supply chain risk management processes are identified, established, assessed, managed, and agreed to by organizational stakeholders</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.SC-1">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.SC-2">ID.SC-2</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Identify, prioritize and assess suppliers and partners of critical information systems, components and services using a cyber supply chain risk assessment process</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.SC-2">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.SC-3">ID.SC-3</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Suppliers and partners are required by contract to implement appropriate measures designed to meet the objectives of the Information Security program or Cyber Supply Chain Risk Management Plan.</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.SC-3">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.SC-4">ID.SC-4</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Suppliers and partners are monitored to confirm that they have satisfied their obligations as required. Reviews of audits, summaries of test results, or other equivalent evaluations of suppliers/providers are conducted</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.SC-4">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr><tr align="left" style="border-bottom: 1px gray solid;"><td align="left" width="5%" valign="left" class="td-nist-link"><a class="nist-link" href="crosswalk.php?ID.SC-5">ID.SC-5</a></td><td align="left" width="80%" valign="left" class="td-nist-left">Response and recovery planning and testing are conducted with critical suppliers/providers</td><td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="ID.SC-5">MIL:<input type="text" size="1" style="background-color: transparent;" value="0" onClick="this.select();" >Incomplete <input type="submit" value="UPDATE" style="background-color: lightskyblue;"></form></td></tr>                                    </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- ################################################################################################################################################ -->
                        <div id="protect" class="tab-pane ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Protect
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            INFO
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ################################################################################################################################################ -->
                        <div id="detect" class="tab-pane ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Detect
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            INFO
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ################################################################################################################################################ -->
                        <div id="respond" class="tab-pane ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Respond
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            INFO
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ################################################################################################################################################ -->
                        <div id="recover" class="tab-pane ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Recover
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            INFO
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ################################################################################################################################################ -->
                        <div id="crr" class="tab-pane ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            CRR
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            INFO
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ################################################################################################################################################ -->
                        <!-- ################################################################################################################################################ -->



            </div>
        </div>
    </div>


<!-- main-footer -->
<?php include('main_footer.php'); ?>
</div>
</div>

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    
    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <script src="../data/morris-bar.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
<script src="../../bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
<script>
  $(function () {
    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
</body>

</html>

