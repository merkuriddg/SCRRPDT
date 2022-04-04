

<style>

.menu_style{
background-color: transparent !important;
width: 15%;
height: 90%;
margin-top:7%;
  
}

.verticalLine {
background-color: transparent !important;
  border-left: thick solid #F46904;
  margin-left: 5px;
  
}

.text_style {
background-color: transparent !important;
   margin-left: 10px;
   color: #7C868E !important;
   font-family: "Arial Black";
   font-size: 1.1vw;
   width: 100%;
 

}
.heading {
background-color: transparent !important;
   margin-left: 10px;
   color: black !important;
   font-size: 2vw;
   width: 100%;
 

}


.logout{
  background-color: #F46904 !important;
   margin-left: 10px;
   text-align:center;
   font-size: 1vw;
   color: white !important;
   font-family: "Arial Black";
     width: auto;
    height: auto;
    border-radius: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 10px;
    margin-bottom: 10px;

}
</style>

<div class="sidenav menu_style" >

<?php include('get_member_info.php'); ?>
    <section class="sidebar" style="background-color: transparent; border: none; border-width : 0; border : 0">
        <div class="user-panel" >
            <div class="logo-user">
               <span class="text-center heading" >SCRRPDT<br>
                </span>
            </div>
        </div>
        <div class="menulink">
        <p class="panel-menu menu-left">
            <div class="verticalLine">
            <a href="dashboard.php"class="text_style" >Dashboard</a>
            </div>
            <br>
            <div class="verticalLine">
            <a href="goals.php" class="text_style">Our Goals</a>
            <a href="objectives.php" class="text_style">Our Objectives</a>
            <a href="tasks.php" class="text_style">Our Tasks</a>
            </div>
            <br>
            <div class="verticalLine">
            <a href="currentprofiles.php" class="text_style">Current Profiles</a>
            <a href="targetprofiles.php" class="text_style">Target Profiles</a>
            <a href="impacts.php" class="text_style">Possible Impacts</a>
            <a href="roadmaps.php" class="text_style">Our Roadmaps</a>
            </div>
            <br>
            <div class="verticalLine">
            <a href="profilebuilder.php" class="text_style">Profile Builder</a>
            <a href="impactbuilder.php" class="text_style">Impact Builder</a>
            <a href="roadmapbuilder.php" class="text_style">Roadmap Builder</a>
            </div>
            <br>
            <div class="verticalLine">
            <a href="nist.php" class="text_style">NIST CSF</a>
            <a href="tiers.php" class="text_style">Tiers</a>
            <!--
            <a href="baldridge.php" class="menulink3">Baldridge</a>
            <a href="ffeic.php" class="menulink3">FFEIC</a>
            <a href="octave.php" class="menulink3">OCTAVE</a>
            <a href="support.php" class="menulink3">Support</a-->
            </div>
            <br>
            <div class="verticalLine">
            <a href="settings.php" class="text_style">Settings</a>
            <a href="members.php" class="text_style">Members</a>
            </div>
            <a href="logout.php" class="logout">Logout</a>
             
        </p>
        
        </div>
    </section>
</div>

