<?php
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
                            <li class="active"><a href="#quick" data-toggle="tab"><span><i class="fa fa-shield-alt"></i> <b>NIST CSF v1.1</b> </span></a>
                            </li>
                            <li><a href="#identify" data-toggle="tab">Identify</a>
                            </li>
                            <li><a href="#protect" data-toggle="tab">Protect</a>
                            </li>
                            <li><a href="#detect" data-toggle="tab">Detect</a>
                            </li>
                            <li><a href="#respond" data-toggle="tab">Respond</a>
                            </li>
                            <li><a href="#recover" data-toggle="tab">Recover</a>
                            </li>
                            <li><a href="#overall" data-toggle="tab">Full NIST CSF</a>
                            </li>
                        </ul>


                <div class="tab-content">
                    <div id="quick" class="tab-pane active">


                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           NIST Cybersecurity Framework
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                        <p class="nist-title">Information here about the NIST CSF</p>



                                            The NIST Cybersecurity Framework as version 1.1 is now renamed as "Framework for Improving Critical Infrastructure Cybersecurity"
                                            <br>
                                            The Framework focuses on using business drivers to guide cybersecurity activities and considering cybersecurity risks as part of the organization’s risk management processes.
                                            The Framework consists of three parts: the Framework Core, the Implementation Tiers, and the Framework Profiles.
                                            The Framework Core is a set of cybersecurity activities, outcomes, and informative references that are common across sectors and critical infrastructure.
                                            Elements of the Core provide detailed guidance for developing individual organizational Profiles.
                                            Through use of Profiles, the Framework will help an organization to align and prioritize its cybersecurity activities with its business/mission requirements, risk tolerances, and resources.
                                            The Tiers provide a mechanism for organizations to view and understand the characteristics of their approach to managing cybersecurity risk, which will help in prioritizing and achieving cybersecurity objectives.
                                            <br>
                                            While this document was developed to improve cybersecurity risk management in critical infrastructure, the Framework can be used by organizations in any sector or community.
                                            The Framework enables organizations – regardless of size, degree of cybersecurity risk, or cybersecurity sophistication – to apply the principles and best practices of risk management to improving security and resilience.
                                            The Framework provides a common organizing structure for multiple approaches to cybersecurity by assembling standards, guidelines, and practices that are working effectively today.
                                            <br>
                                            The Framework offers a flexible way to address cybersecurity, including cybersecurity’s effect on physical, cyber, and people dimensions.
                                            It is applicable to organizations relying on technology, whether their cybersecurity focus is primarily on information technology (IT), industrial control systems (ICS), cyber-physical systems (CPS), or connected devices more generally, including the Internet of Things (IoT).
                                            The Framework can assist organizations in addressing cybersecurity as it affects the privacy of customers, employees, and other parties.
                                            Additionally, the Framework’s outcomes serve as targets for workforce development and evolution activities.
                                            <br>
                                            The Framework is not a one-size-fits-all approach to managing cybersecurity risk for critical infrastructure.
                                            Organizations will continue to have unique risks – different threats, different vulnerabilities, different risk tolerances.
                                            They also will vary in how they customize practices described in the Framework.
                                            Organizations can determine activities that are important to critical service delivery and can prioritize investments to maximize the impact of each dollar spent.
                                            Ultimately, the Framework is aimed at reducing and better managing cybersecurity risks.
                                            <br>
                                            The Framework provides a common taxonomy and mechanism for organizations to:
                                            1) Describe their current cybersecurity posture;
                                            2) Describe their target state for cybersecurity;
                                            3) Identify and prioritize opportunities for improvement within the context of a continuous and repeatable process;
                                            4) Assess progress toward the target state;
                                            5) Communicate among internal and external stakeholders about cybersecurity risk.
                                            <br>

                                            Framework Implementation Tiers
                                            <br>
                                            The Framework Implementation Tiers (“Tiers”) provide context on how an organization views cybersecurity risk and the processes in place to manage that risk.
                                            Ranging from Partial (Tier 1) to Adaptive (Tier 4), Tiers describe an increasing degree of rigor and sophistication in cybersecurity risk management practices.
                                            They help determine the extent to which cybersecurity risk management is informed by business needs and is integrated into an organization’s overall risk management practices.
                                            Risk management considerations include many aspects of cybersecurity, including the degree to which privacy and civil liberties considerations are integrated into an organization’s management of cybersecurity risk and potential risk responses.
                                            <br>
                                            The Tier definitions are as follows:
                                            Tier 1: Partial
                                            <br>
                                             Risk Management Process – Organizational cybersecurity risk management practices are not formalized, and risk is managed in an ad hoc and sometimes reactive manner. Prioritization of cybersecurity activities may not be directly informed by organizational risk objectives, the threat environment, or business/mission requirements.
                                             Integrated Risk Management Program – There is limited awareness of cybersecurity risk at the organizational level. The organization implements cybersecurity risk management on an irregular, case-by-case basis due to varied experience or information gained from outside sources. The organization may not have processes that enable cybersecurity information to be shared within the organization.
                                             External Participation – The organization does not understand its role in the larger ecosystem with respect to either its dependencies or dependents. The organization does not collaborate with or receive information (e.g., threat intelligence, best practices, technologies) from other entities (e.g., buyers, suppliers, dependencies, dependents, ISAOs, researchers, governments), nor does it share information. The organization is generally unaware of the cyber supply chain risks of the products and services it provides and that it uses.
                                            <br>
                                            Tier 2: Risk Informed
                                             Risk Management Process – Risk management practices are approved by management but may not be established as organizational-wide policy. Prioritization of cybersecurity activities and protection needs is directly informed by organizational risk objectives, the threat environment, or business/mission requirements.
                                             Integrated Risk Management Program – There is an awareness of cybersecurity risk at the organizational level, but an organization-wide approach to managing cybersecurity risk has not been established. Cybersecurity information is shared within the organization on an informal basis. Consideration of cybersecurity in organizational objectives and programs may occur at some but not all levels of the organization. Cyber risk assessment of organizational and external assets occurs, but is not typically repeatable or reoccurring.
                                             External Participation – Generally, the organization understands its role in the larger ecosystem with respect to either its own dependencies or dependents, but not both. The organization collaborates with and receives some information from other entities and generates some of its own information, but may not share information with others. Additionally, the organization is aware of the cyber supply chain risks associated with the products and services it provides and uses, but does not act consistently or formally upon those risks.
                                            <br>
                                            Tier 3: Repeatable
                                             Risk Management Process – The organization’s risk management practices are formally approved and expressed as policy. Organizational cybersecurity practices are regularly updated based on the application of risk management processes to changes in business/mission requirements and a changing threat and technology landscape.
                                             Integrated Risk Management Program – There is an organization-wide approach to manage cybersecurity risk. Risk-informed policies, processes, and procedures are defined, implemented as intended, and reviewed. Consistent methods are in place to respond effectively to changes in risk. Personnel possess the knowledge and skills to perform their appointed roles and responsibilities. The organization consistently and accurately monitors cybersecurity risk of organizational assets. Senior cybersecurity and non-cybersecurity executives communicate regularly regarding cybersecurity risk. Senior executives ensure consideration of cybersecurity through all lines of operation in the organization.
                                             External Participation - The organization understands its role, dependencies, and dependents in the larger ecosystem and may contribute to the community’s broader understanding of risks. It collaborates with and receives information from other entities regularly that complements internally generated information, and shares information with other entities. The organization is aware of the cyber supply chain risks associated with the products and services it provides and that it uses. Additionally, it usually acts formally upon those risks, including mechanisms such as written agreements to communicate baseline requirements, governance structures (e.g., risk councils), and policy implementation and monitoring.
                                            <br>
                                            Tier 4: Adaptive
                                             Risk Management Process – The organization adapts its cybersecurity practices based on previous and current cybersecurity activities, including lessons learned and predictive indicators. Through a process of continuous improvement incorporating advanced cybersecurity technologies and practices, the organization actively adapts to a changing threat and technology landscape and responds in a timely and effective manner to evolving, sophisticated threats.
                                             Integrated Risk Management Program – There is an organization-wide approach to managing cybersecurity risk that uses risk-informed policies, processes, and procedures to address potential cybersecurity events. The relationship between cybersecurity risk and organizational objectives is clearly understood and considered when making decisions. Senior executives monitor cybersecurity risk in the same context as financial risk and other organizational risks. The organizational budget is based on an understanding of the current and predicted risk environment and risk tolerance. Business units implement executive vision and analyze system-level risks in the context of the organizational risk tolerances. Cybersecurity risk management is part of the organizational culture and evolves from an awareness of previous activities and continuous awareness of activities on their systems and networks. The organization can quickly and efficiently account for changes to business/mission objectives in how risk is approached and communicated.
                                             External Participation - The organization understands its role, dependencies, and dependents in the larger ecosystem and contributes to the community’s broader understanding of risks. It receives, generates, and reviews prioritized information that informs continuous analysis of its risks as the threat and technology landscapes evolve. The organization shares that information internally and externally with other collaborators. The organization uses real-time or near real-time information to understand and consistently act upon cyber supply chain risks associated with the products and services it provides and that it uses. Additionally, it communicates proactively, using formal (e.g. agreements) and informal mechanisms to develop and maintain strong supply chain relationships.
                                            <br>
                                            The Framework Profile (“Profile”) is the alignment of the Functions, Categories, and Subcategories with the business requirements, risk tolerance, and resources of the organization.
                                            A Profile enables organizations to establish a roadmap for reducing cybersecurity risk that is well aligned with organizational and sector goals, considers legal/regulatory requirements and industry best practices, and reflects risk management priorities.
                                            Given the complexity of many organizations, they may choose to have multiple profiles, aligned with particular components and recognizing their individual needs.





                                            <p class="nist-title">Information here about the NIST CSF for Finance</p>
                                        <p class="nist-title">Information here about the CRR</p>

                                            <p class="nist-title">The CRR Resource Guides in the series are:</p>
                                            <ul >
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-AM.pdf" class="crr-link" target="_blank">Asset Management [pdf]:</a><br>
                                                The Asset Management guide focuses on the processes used to identify, document, and manage the organization’s assets.
                                                </li>
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-CM.pdf" class="crr-link" target="_blank">Controls Management [pdf]:</a><br>
                                                The Controls Management guide focuses on the processes used to define, analyze, assess, and manage the organization’s controls.
                                                </li>
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-CCM.pdf" class="crr-link" target="_blank">Configuration and Change Management [pdf]:</a><br>
                                                The Configuration and Change Management Guide focuses on the processes used to ensure the integrity of an organization’s assets.
                                                </li>
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-VM.pdf" class="crr-link" target="_blank">Vulnerability Management [pdf]:</a><br>
                                                    The Vulnerability Management Guide focuses on the processes used to identify, analyze, and manage vulnerabilities within the organization’s operating environment.
                                                </li>
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-IM.pdf" class="crr-link" target="_blank">Incident Management [pdf]:</a><br>
                                                The Incident Management Guide focuses on the processes used to identify and analyze events, declare incidents, determine a response and improve an organization’s incident management capability.

                                                </li>
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-SC.pdf" class="crr-link" target="_blank">Service Continuity Management [pdf]:</a><br>
                                                The Service Continuity Management Guide focuses on processes used to ensure the continuity of an organization’s essential services.

                                                </li>
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-RM.pdf" class="crr-link" target="_blank">Risk Management [pdf]:</a><br>
                                                The Risk Management Guide focuses on process used to identify, analyze, and manage risks to an organization’s critical services.

                                                </li>
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-EDM.pdf" class="crr-link" target="_blank">External Dependencies Management [pdf]:</a><br>
                                                The External Dependencies Management Guide focuses on processes used to establish an appropriate level of controls to manage the risks that are related to the critical service’s dependence on the actions of external entities.

                                                </li>
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-TA.pdf" class="crr-link" target="_blank">Training and Awareness [pdf]:</a><br>
                                                The Training and Awareness Guide focuses on processes used to develop skills and promote awareness for people with roles that support the critical service.

                                                </li>
                                                <li class="crr"><a href="_OLD/NIST/CRR_Resource_Guide-SA.pdf" class="crr-link" target="_blank">Situational Awareness [pdf]:</a><br>
                                                The Situational Awareness Guide focuses on processes used to discover and analyze information related to the immediate operational stability of the organization’s critical services and to coordinate such information across the enterprise.
                                                </li>
                                            </ul>
                                        https://insights.sei.cmu.edu/insider-threat/2017/12/mapping-CRR-to-FFIEC-CAT.html
                                        https://resources.sei.cmu.edu/asset_files/TechnicalNote/2013_004_001_69194.pdf

                                        <p class="nist-title">Information here about the MIL</p>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                            <tr style="border-top: 2px darkgray solid;"><td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL0</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Incomplete</td>
                                                <td width="90%" class="td-mil-left">MIL0 Incomplete indicates that a specific practice in a CERT-RMM process area11 is not being performed.<br>
                                                    If MIL0 is assigned, no further assessment of maturity indicator is performed because incomplete processes are not institutionalized.
                                                </td>
                                            </tr>
                                            <tr><td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL1</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Performed</td>
                                                <td width="90%" class="td-mil-left">MIL1 Performed indicates that a specific practice in a CERT-RMM process area is being performed.<br>
                                                    MIL1 means that there is sufficient and substantial support for the existence of the practice.<br>
                                                    Once MIL1 is attained, questions related to higher MILs can be asked to determine if the practice is institutionalized to higher degrees of maturity.
                                                </td>
                                            </tr>
                                            <tr><td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL2</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Planned</td>
                                                <td width="90%" class="td-mil-left">MIL2 Planned indicates that a specific practice in a CERT-RMM process area is not only performed but is supported by sufficient planning, stakeholders, and relevant standards and guidelines.<br>
                                                    A planned process or practice is<br>
                                                    • established by the organization<br>
                                                    • planned<br>
                                                    • supported by stakeholders<br>
                                                    • supported by relevant standards and guidelines
                                                </td>
                                            </tr>
                                            <tr><td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL3</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Managed</td>
                                                <td width="90%" class="td-mil-left">MIL3 Managed indicates that a specific practice in a CERT-RMM process area is performed, is planned, and has the basic infrastructure in place to support the process.<br>
                                                    A managed process or practice<br>• is governed by the organization<br>
                                                    • is appropriately staffed and funded<br>
                                                    • is assigned to staff who are responsible and accountable for the performance of the practice<br>
                                                    • is performed by staff who are adequately trained to perform the practice<br>
                                                    • produces work products that are expected from performance of the practice and are placed under appropriate levels of configuration control<br>
                                                    • is managed for risk
                                                </td>
                                            </tr>
                                            <tr><td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL4</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Measured</td>
                                                <td width="90%" class="td-mil-left">MIL4 Measured indicates that a specific practice in a CERT-RMM process area is performed, planned, managed, monitored, and controlled.<br>
                                                    A measured process or practice is<br>
                                                    • periodically evaluated for effectiveness<br>
                                                    • monitored and controlled<br>
                                                    • objectively evaluated against its practice description and plan<br>
                                                    • periodically reviewed with higher level management
                                                </td>
                                            </tr>
                                            <tr><td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL5</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Defined</td>
                                                <td width="90%" class="td-mil-left">MIL5 Defined indicates that a specific practice in a CERT-RMM process area is performed, planned, managed, monitored, controlled, and consistent across all internal constituencies who have a vested interest in the performance of the practice.<br>
                                                    A defined process or practice ensures that the organization reaps the benefits of its consistent performance across organizational units and that all organizational units can benefit from improvements realized in any organizational unit.<br>
                                                    At MIL5, a process or practice<br>
                                                    • is defined by the organization and tailored by individual operating units within the organization for their use<br>
                                                    • is supported by improvement information that is collected by and shared among operating units for the overall benefit of the organization
                                                </td>
                                            </tr>
                                            <tr><td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL6</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Shared</td>
                                                <td width="90%" class="td-mil-left">MIL6 Shared indicates that a specific practice in a CERT-RMM process area is performed, planned, managed, monitored, controlled, and consistent across all internal and external13 constituencies who have a vested interest in the performance of the practice.<br>
                                                    A shared process or practice ensures that the community reaps the benefits of consistent performance of the practice across many organizations bound by the community (for example, because they collectively provide a shared service such as power generation in a geographical region) and that all of the community’s organizations can benefit from improvements realized in any community organization.<br>
                                                    At MIL6, a process or practice is<br>
                                                    • defined by the community and tailored by that community’s organizations for their use<br>
                                                    • supported by improvement information that is collected by and shared among organizations for the overall benefit of the community
                                                </td>
                                            </tr>
                                        </table>
                                        </div>

                                        <div class="panel-body">
                                        <p class="nist-title">Determining the MIL</p>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL1</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Performed</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Is there evidence that the practice is being performed?<br>
                                                    • Are the basic expected outputs of the practice observable and available for inspection?
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL2</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Planned</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Has MIL1 been achieved?<br>
                                                    • Is the practice documented and communicable to all who need to know?<br>
                                                    • Is the practice performed according to a documented plan?<br>
                                                    • Are the stakeholders of the practice known, and are they aware of the practice and their role in it?<br>
                                                    • Have the standards and guidelines that support the practice been identified and implemented?
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL3</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Managed</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Have MIL1 and MIL2 been achieved?<br>
                                                    • Is the practice supported by policy, and is there appropriate oversight over the performance of the practice?<br>
                                                    • Are the staff and funds that are necessary to perform the practice as intended available?<br>
                                                    • Have staff been assigned to perform the practice, and are they responsible and accountable for its performance?<br>
                                                    • Are the staff who perform the practice adequately skilled and trained to perform it?<br>
                                                    • Does the practice produce artifacts and work products that are expected from it performance, and if so, are the configurations of these artifacts and work products managed?<br>
                                                    • Are risks related to the performance of the practice identified, analyzed, disposed of, monitored, and controlled?
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL4</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Measured</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Have MIL1, MIL2, and MIL3 been achieved?<br>
                                                    • Is the practice periodically reviewed to ensure that it is effective and producing intended results?<br>
                                                    • Are appropriate implementation and performance measures identified, applied, and analyzed?<br>
                                                    • Is the practice periodically evaluated to ensure that it adheres to the practice description and the plan for the practice?<br>
                                                    • Is higher level management aware of any issues related to the performance of the practice?
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL5</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Defined</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Have MIL1, MIL2, MIL3, and MIL4 been achieved?<br>
                                                    • Is there an organization-sponsored definition of the practice from which operating units can derive practices that fit their unique operating circumstances? <br>
                                                    • Are practice improvements documented and shared across internal constituencies so that the organization as a whole reaps benefits from these improvements?
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL6</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Shared</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Have MIL1, MIL2, MIL3, MIL4, and MIL5 been achieved?<br>
                                                    • Is there a community-sponsored definition of the practice from which organizations can derive practices that fit their unique operating circumstances while still achieving the shared goals of the community?<br>
                                                    • Are practice improvements documented and shared across organizations so that the community as a whole benefits from these improvements?
                                                </td>
                                            </tr>
                                        </table>
                                        </div>

                                        <div class="panel-body">
                                        <p class="nist-title">MIL in the CRR</p>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL0</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Incomplete</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Practices in a domain are not being fully performed
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL1</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Performed</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Practices in a domain are being performed
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL2</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Planned</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Domain activities are documented in a plan. <br>
                                                    • Stakeholders are involved and aware of their roles. <br>
                                                    • Standards or guidelines are used to guide practice implementation.
                                               </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL3</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Managed</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Management oversees performance of domain activities.<br>
                                                    • Qualified staff have been assigned to perform domain activities.<br>
                                                    • Adequate funding is provided to perform domain activities.<br>
                                                    • Risks related to performance of domain activities is identified and managed.
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL4</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Measured</td>
                                                <td width="90%" class="td-mil-left">
                                                    • Domain activities are periodically reviewed and measured for effectiveness.<br>
                                                    • Domain activities are periodically reviewed to ensure they are adhering to the plan.<br>
                                                    • Higher level management is aware of issues related to the performance of domain activities.
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL5</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Defined</td>
                                                <td width="90%" class="td-mil-left">
                                                    • A standard definition of domain activities has been adopted from which operating units can derive practices that fit their unique operating circumstances.<br>
                                                    • Improvements to domain activities are documented and shared across the organization.
                                                </td>
                                            </tr>
                                            <tr style="border-top: 2px darkgray solid;">
                                                <td width="5%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">MIL6</td><td width="10%" class="td-nist-left" valign="top" style="border-bottom:1px gray solid;">Shared</td>
                                                <td width="90%" class="td-mil-left">
                                                </td>
                                            </tr>
                                        </table>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- ################################################################################################################################################ -->
                    <div id="identify" class="tab-pane">
                        <div class="box-header">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Identify
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                        <?php

                                        $result = mysqli_query($con, "CALL get_nist_csf_function('ID')") or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];
                                            $csf_score = "0";
                                            switch ($csf_score) {case 0: $csf_mil="Incomplete"; break; case 1: $csf_mil="Performed"; break; case 3: $csf_mil="Planned"; break; case 4: $csf_mil="Managed"; break; case 5: $csf_mil="Measured"; break; case 6: $csf_mil="Shared"; break; }

                                            if ($temp_categorycode != $csf_categorycode) {
                                                echo '<tr align="left" style="border-top: 2px darkgray solid;">';
                                                echo '<td align="left" colspan="3" width="100%" valign="left" class="td-nist-title"><br>' . $csf_category . '</td>';
                                                echo '</tr>';


                                                if ($temp_subcategory != $csf_subcategory) {
                                                    echo '<tr align="left">';
                                                    echo '<td align="left" colspan="3" width="100%" valign="left" class="td-nist-left">' . $csf_categorytext . '</td>';
                                                    echo '</tr>';
                                                }
                                            }

                                            echo '<tr align="left" style="border-bottom: 1px gray solid;">';
                                            echo '<td align="left" width="5%" valign="left" class="td-nist-link">';
                                            echo '<a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a>';
                                            echo '</td>';
                                            echo '<td align="left" width="80%" valign="left" class="td-nist-left">' . $csf_subcategory . '</td>';
                                            echo '<td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">';
                                            echo 'MIL:<input type="text" size="1" style="background-color: transparent;" value="'.$csf_score.'" onClick="this.select();" >'.$csf_mil.' <input type="submit" value="UPDATE" style="background-color: lightskyblue;">';
                                            echo '</form></td>';
                                            echo '</tr>';

                                            $temp_subcategory = $csf_subcategory;
                                            $temp_categorycode = $csf_categorycode;

                                        }
                                        $con->next_result();
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- ################################################################################################################################################ -->
                    <div id="protect" class="tab-pane">
                        <div class="box-header">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Protect
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                        <?php

                                        $result = mysqli_query($con, "CALL get_nist_csf_function('PR')") or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            if ($temp_categorycode != $csf_categorycode) {
                                                echo '<tr align="left">';
                                                echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-title"><br>' . $csf_category . '</td>';
                                                echo '</tr>';


                                                if ($temp_subcategory != $csf_subcategory) {
                                                    echo '<tr align="left">';
                                                    echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-left">' . $csf_categorytext . '</td>';
                                                    echo '</tr>';
                                                }
                                            }

                                            echo '<tr align="left" style="border-bottom: 1px gray solid;">';
                                            echo '<td align="left" width="5%" valign="left" class="td-nist-link">';
                                            echo '<a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a>';
                                            echo '</td>';
                                            echo '<td align="left" width="80%" valign="left" class="td-nist-left">' . $csf_subcategory . '</td>';
                                            echo '<td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">';
                                            echo 'MIL:<input type="text" size="1" style="background-color: transparent;" value="'.$csf_score.'" onClick="this.select();" >'.$csf_mil.' <input type="submit" value="UPDATE" style="background-color: lightskyblue;">';
                                            echo '</form></td>';
                                            echo '</tr>';

                                            $temp_subcategory = $csf_subcategory;
                                            $temp_categorycode = $csf_categorycode;

                                        }
                                        $con->next_result();
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ################################################################################################################################################ -->
                    <div id="detect" class="tab-pane">
                        <div class="box-header">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Detect
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                        <?php

                                        $result = mysqli_query($con, "CALL get_nist_csf_function('DE')") or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];


                                            if ($temp_categorycode != $csf_categorycode) {
                                                echo '<tr align="left">';
                                                echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-title"><br>' . $csf_category . '</td>';
                                                echo '</tr>';


                                                if ($temp_subcategory != $csf_subcategory) {
                                                    echo '<tr align="left">';
                                                    echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-left">' . $csf_categorytext . '</td>';
                                                    echo '</tr>';
                                                }
                                            }

                                            echo '<tr align="left" style="border-bottom: 1px gray solid;">';
                                            echo '<td align="left" width="5%" valign="left" class="td-nist-link">';
                                            echo '<a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a>';
                                            echo '</td>';
                                            echo '<td align="left" width="80%" valign="left" class="td-nist-left">' . $csf_subcategory . '</td>';
                                            echo '<td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">';
                                            echo 'MIL:<input type="text" size="1" style="background-color: transparent;" value="'.$csf_score.'" onClick="this.select();" >'.$csf_mil.' <input type="submit" value="UPDATE" style="background-color: lightskyblue;">';
                                            echo '</form></td>';
                                            echo '</tr>';

                                            $temp_subcategory = $csf_subcategory;
                                            $temp_categorycode = $csf_categorycode;

                                        }
                                        $con->next_result();
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ################################################################################################################################################ -->
                    <div id="respond" class="tab-pane">
                        <div class="box-header">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Respond
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                        <?php

                                        $result = mysqli_query($con, "CALL get_nist_csf_function('RS')") or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];


                                            if ($temp_categorycode != $csf_categorycode) {
                                                echo '<tr align="left">';
                                                echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-title"><br>' . $csf_category . '</td>';
                                                echo '</tr>';


                                                if ($temp_subcategory != $csf_subcategory) {
                                                    echo '<tr align="left">';
                                                    echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-left">' . $csf_categorytext . '</td>';
                                                    echo '</tr>';
                                                }
                                            }

                                            echo '<tr align="left" style="border-bottom: 1px gray solid;">';
                                            echo '<td align="left" width="5%" valign="left" class="td-nist-link">';
                                            echo '<a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a>';
                                            echo '</td>';
                                            echo '<td align="left" width="80%" valign="left" class="td-nist-left">' . $csf_subcategory . '</td>';
                                            echo '<td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">';
                                            echo 'MIL:<input type="text" size="1" style="background-color: transparent;" value="'.$csf_score.'" onClick="this.select();" >'.$csf_mil.' <input type="submit" value="UPDATE" style="background-color: lightskyblue;">';
                                            echo '</form></td>';
                                            echo '</tr>';

                                            $temp_subcategory = $csf_subcategory;
                                            $temp_categorycode = $csf_categorycode;

                                        }
                                        $con->next_result();
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ################################################################################################################################################ -->
                    <div id="recover" class="tab-pane">
                        <div class="box-header">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Recover
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                        <?php

                                        $result = mysqli_query($con, "CALL get_nist_csf_function('RC')") or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];


                                            if ($temp_categorycode != $csf_categorycode) {
                                                echo '<tr align="left">';
                                                echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-title"><br>' . $csf_category . '</td>';
                                                echo '</tr>';


                                                if ($temp_subcategory != $csf_subcategory) {
                                                    echo '<tr align="left">';
                                                    echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-left">' . $csf_categorytext . '</td>';
                                                    echo '</tr>';
                                                }
                                            }

                                            echo '<tr align="left" style="border-bottom: 1px gray solid;">';
                                            echo '<td align="left" width="5%" valign="left" class="td-nist-link">';
                                            echo '<a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a>';
                                            echo '</td>';
                                            echo '<td align="left" width="80%" valign="left" class="td-nist-left">' . $csf_subcategory . '</td>';
                                            echo '<td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">';
                                            echo 'MIL:<input type="text" size="1" style="background-color: transparent;" value="'.$csf_score.'" onClick="this.select();" >'.$csf_mil.' <input type="submit" value="UPDATE" style="background-color: lightskyblue;">';
                                            echo '</form></td>';
                                            echo '</tr>';

                                            $temp_subcategory = $csf_subcategory;
                                            $temp_categorycode = $csf_categorycode;

                                        }
                                        $con->next_result();
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ################################################################################################################################################ -->
                    <div id="overall" class="tab-pane">
                        <div class="box-header">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Full NIST CSF
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                        <?php

                                        $result = mysqli_query($con, "select * from NIST_CSF ORDER BY id") or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];


                                        if ($temp_functioncode != $csf_functioncode) {
                                            echo '<tr align="left">';
                                            echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-title"><br>' . $csf_function . '</td>';
                                            echo '</tr>';


                                            if ($temp_categorycode != $csf_categorycode) {
                                                echo '<tr align="left">';
                                                echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-title"><br>' . $csf_category . '</td>';
                                                echo '</tr>';


                                                if ($temp_subcategory != $csf_subcategory) {
                                                    echo '<tr align="left">';
                                                    echo '<td align="left" colspan="2" width="100%" valign="left" class="td-nist-left">' . $csf_categorytext . '</td>';
                                                    echo '</tr>';
                                                }
                                            }
                                        }
                                            echo '<tr align="left" style="border-bottom: 1px gray solid;">';
                                            echo '<td align="left" width="5%" valign="left" class="td-nist-link">';
                                            echo '<a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a>';
                                            echo '</td>';
                                            echo '<td align="left" width="80%" valign="left" class="td-nist-left">' . $csf_subcategory . '</td>';
                                            echo '<td align="left" width="15%" valign="left" class="td-nist-center"><form action="updateMIL.php" method="post"><input type="hidden" value="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">';
                                            echo 'MIL:<input type="text" size="1" style="background-color: transparent;" value="'.$csf_score.'" onClick="this.select();" >'.$csf_mil.' <input type="submit" value="UPDATE" style="background-color: lightskyblue;">';
                                            echo '</form></td>';
                                            echo '</tr>';

/*
                                            echo '<tr align="left" style="border-bottom: 2px blue solid;">';
                                            echo '<td align="left" colspan=3 width="100%" valign="left" class="td-nist-left" style="color:red;">';
                                            echo $temp_subcategory . '=' . $csf_subcategory . ' | ';
                                            echo $temp_categorycode . '=' . $csf_categorycode . ' | ';
                                            echo $temp_functioncode . '=' . $csf_functioncode . ' | ';
                                            echo '</td>';
                                            echo '</tr>';
 */                                           $temp_subcategory = $csf_subcategory;
                                            $temp_categorycode = $csf_categorycode;
                                            $temp_functioncode = $csf_functioncode;

                                        }
                                        $con->next_result();
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
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
    
    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>



    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
</body>

</html>

