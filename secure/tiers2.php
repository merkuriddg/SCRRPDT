<<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<div lang="en">
    <head>
        <?php include('head.php'); ?>
    </head>

    <div>
        <?php include('tabcontent.php'); ?>
        <?php include('get_member_info.php'); ?>
        <?php include('menu.php'); ?>

        <div class="main">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-header">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#quick" data-toggle="tab"><span><i class="fa fa-shield-alt"></i> <b>NIST CSF Tiers</b> </span></a>
                                        </li>
                                        <li><a href="#t1" data-toggle="tab">Tier 1</a>
                                        </li>
                                        <li><a href="#t2" data-toggle="tab">Tier 2</a>
                                        </li>
                                        <li><a href="#t3" data-toggle="tab">Tier 3</a>
                                        </li>
                                        <li><a href="#t4" data-toggle="tab">Tier 4</a>
                                        </li>
                                    </ul>


                                    <div class="tab-content">
                                        <!-- ################################################################################################################################################ -->
                                        <div id="quick" class="tab-pane active">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            The Tiers:
                                                        </div>
                                                        <div class="panel-body">
                                                            <p class="tier-text">
                                                                <b>A Simple Explanation as to why these are Not Maturity Models
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ################################################################################################################################################ -->
                                        <div id="t1" class="tab-pane ">
                                            <div class="box-header">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        Tier 1
                                                    </div>
                                                    <div class="panel-body">
                                                <span class="tier-text">
                                                <b>Risk Management Process</b></br>
                                                    Organizational cybersecurity risk management practices are not formalized, and risk is managed in an ad hoc and sometimes reactive manner. Prioritization of cybersecurity activities may not be directly informed by organizational risk objectives, the threat environment, or business/mission requirements. </br></br>
                                                    <b>Integrated Risk Management Program</b></br>
                                                    There is limited awareness of cybersecurity risk at the organizational level. The organization implements cybersecurity risk management on an irregular, case-by-case basis due to varied experience or information gained from outside sources. The organization may not have processes that enable cybersecurity information to be shared within the organization. </br></br>
                                                    <b>External Participation</b></br>
                                                    The organization does not understand its role in the larger ecosystem with respect to either its dependencies or dependents. The organization does not collaborate with or receive information (e.g., threat intelligence, best practices, technologies) from other entities (e.g., buyers, suppliers, dependencies, dependents, ISAOs, researchers, governments), nor does it share information. The organization is generally unaware of the cyber supply chain risks of the products and services it provides and that it uses. </br></br>
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ################################################################################################################################################ -->
                                        <div id="t2" class="tab-pane ">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Tier 2</div>
                                                <div class="panel-body">
                                        <span class="tier-text">
                                            <b>Risk Management Process</b></br>
                                            Risk management practices are approved by management but may not be established as organizational-wide policy. Prioritization of cybersecurity activities and protection needs is directly informed by organizational risk objectives, the threat environment, or business/mission requirements. </br></br>
                                            <b>Integrated Risk Management Program</b></br>
                                            There is an awareness of cybersecurity risk at the organizational level, but an organization-wide approach to managing cybersecurity risk has not been established. Cybersecurity information is shared within the organization on an informal basis. Consideration of cybersecurity in organizational objectives and programs may occur at some but not all levels of the organization. Cyber risk assessment of organizational and external assets occurs, but is not typically repeatable or reoccurring. </br></br>
                                            <b>External Participation</b></br>
                                            Generally, the organization understands its role in the larger ecosystem with respect to either its own dependencies or dependents, but not both. The organization collaborates with and receives some information from other entities and generates some of its own information, but may not share information with others. Additionally, the organization is aware of the cyber supply chain risks associated with the products and services it provides and uses, but does not act consistently or formally upon those risks. </br></br>
                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ################################################################################################################################################ -->
                                        <div id="t3" class="tab-pane ">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Tier 3
                                                </div>
                                                <div class="panel-body">
                                            <span class="tier-text">
                                                <b>Risk Management Process</b></br>
                                                The organization’s risk management practices are formally approved and expressed as policy. Organizational cybersecurity practices are regularly updated based on the application of risk management processes to changes in business/mission requirements and a changing threat and technology landscape. </br></br>
                                                <b>Integrated Risk Management Program</b></br>
                                                There is an organization-wide approach to manage cybersecurity risk. Risk-informed policies, processes, and procedures are defined, implemented as intended, and reviewed. Consistent methods are in place to respond effectively to changes in risk. Personnel possess the knowledge and skills to perform their appointed roles and responsibilities. The organization consistently and accurately monitors cybersecurity risk of organizational assets. Senior cybersecurity and non-cybersecurity executives communicate regularly regarding cybersecurity risk. Senior executives ensure consideration of cybersecurity through all lines of operation in the organization. </br></br>
                                                <b>External Participation</b></br>
                                                The organization understands its role, dependencies, and dependents in the larger ecosystem and may contribute to the community’s broader understanding of risks. It collaborates with and receives information from other entities regularly that complements internally generated information, and shares information with other entities. The organization is aware of the cyber supply chain risks associated with the products and services it provides and that it uses. Additionally, it usually acts formally upon those risks, including mechanisms such as written agreements to communicate baseline requirements, governance structures (e.g., risk councils), and policy implementation and monitoring. </br></br>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ################################################################################################################################################ -->
                                        <div id="t4" class="tab-pane ">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Tier 4</div>
                                                <div class="panel-body">
                                                    <span class="tier-text">
                                                        <b>Risk Management Process</b></br>
                                                        The organization adapts its cybersecurity practices based on previous and current cybersecurity activities, including lessons learned and predictive indicators. Through a process of continuous improvement incorporating advanced cybersecurity technologies and practices, the organization actively adapts to a changing threat and technology landscape and responds in a timely and effective manner to evolving, sophisticated threats. </br></br>
                                                        <b>Integrated Risk Management Program</b></br>
                                                        There is an organization-wide approach to managing cybersecurity risk that uses risk-informed policies, processes, and procedures to address potential cybersecurity events. The relationship between cybersecurity risk and organizational objectives is clearly understood and considered when making decisions. Senior executives monitor cybersecurity risk in the same context as financial risk and other organizational risks. The organizational budget is based on an understanding of the current and predicted risk environment and risk tolerance. Business units implement executive vision and analyze system-level risks in the context of the organizational risk tolerances. Cybersecurity risk management is part of the organizational culture and evolves from an awareness of previous activities and continuous awareness of activities on their systems and networks. The organization can quickly and efficiently account for changes to business/mission objectives in how risk is approached and communicated. </br></br>
                                                        <b>External Participation</b></br>
                                                        The organization understands its role, dependencies, and dependents in the larger ecosystem and contributes to the community’s broader understanding of risks. It receives, generates, and reviews prioritized information that informs continuous analysis of its risks as the threat and technology landscapes evolve. The organization shares that information internally and externally with other collaborators. The organization uses real-time or near real-time information to understand and consistently act upon cyber supply chain risks associated with the products and services it provides and that it uses. Additionally, it communicates proactively, using formal (e.g. agreements) and informal mechanisms to develop and maintain strong supply chain relationships. </br></br>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ################################################################################################################################################ -->
                                    </div>
                                    <!-- ################################################################################################################################################ -->
                                </div>
                            </div>
                        </div>
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