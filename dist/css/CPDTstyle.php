<?php
header("Content-type: text/css; charset: UTF-8");

$maincolor = "red";
//https://css-tricks.com/css-variables-with-php/
//http://www.digital-web.com/articles/generating_dynamic_css_with_php/

?>


 body {
    font-family: "Lato", sans-serif;
    background-color: whitesmoke;
    color: black;
}
a {
    color:black;
}
.sidenav {
    height: 100%;
    width: 150px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: whitesmoke;
    overflow-x: hidden;
    padding-top: 0;
}
.sidenav a {
    text-decoration: none;
    font-size: 12px;
    color: black;
    display: block;
    font-weight: 100;
}
.sidenav a:hover, .dropdown-btn:hover {
    color: black;
    background-color: whitesmoke;
    font-weight: 300;
    border-bottom: 1px solid gray;
}
.sidenav a:selected {
    background-color: whitesmoke;
    font-weight: 500;
}

.dropdown-btn {
    width:100%; 
    font-size: 12px;
    padding: 6px 6px 6px 20px;
    color: #818181;
    text-decoration: none;
    text-align: left;
    display: block;
    background: none;
    cursor: pointer;
    border: 0;
    outline: none;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: whitesmoke;
  color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: whitesmoke;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right:12px;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: black;
}
.logo {
    padding-top:10px;
    width:100%;
    line-height: .95;
    text-align:center;
    color: lightskyblue;
    font-weight:500;
    font-size:13px;
}
.sidebar {
    padding-bottom: 0;
}
.sidebar-form input:focus {
    border-color: transparent;
}

.main {
    margin: 0 0 0 150px;
    height: 100%;
    padding: 0;
}

.container {
    margin: 0 20 10 0px;
    width: 100%;
}
.container > a {
    color: black;
    font-size: 16px;
    font-weight: 900;
}

.user-panel {
    width: 100%;
    padding-top: 0;
    text-align:center;
}
.user-panel:before,
.user-panel:after {
    content: " ";
    display: table;
}
.user-panel:after {
    clear: both;
}
.user-panel > .image > img {
    width: 100%;
    text-align: center;
    height: auto;
}
.user-panel > .user {
    padding-top:10px;
    width:100%;
}
.user-panel > .user > p {
    color: #818181;
    font-weight: 600;
    font-size: 12px;
    text-align: center;
}
.user-panel > .user > a {
  text-decoration: none;
  font-size: 12px;
}
.user-panel > .user > a > .fa,
.user-panel > .user > a > .ion,
.user-panel > .user > a > .glyphicon {
}

.card {
    border:2px solid white;
    border-radius: 12px;
    margin-bottom: 10px;
    background-color: white;
}
.card-body > input {
    border:0;
    margin:5px;
    padding:3px;
    background-color: whitesmoke;
}
.card-title {
    font-size:14px;
    font-weight: 700;
    color:black;
    text-align: left;
    margin:4px; 
}
.card-title >  a {
    font-family: serif;
    font-size:14px;
    font-weight: 700;
    color:black;
    text-align: left;
    margin:4px; 
}
.card-text  {
    font-family: sans-serif;
    font-size:12px;
    font-weight: 700;
    color:black;
    text-align: left;
    margin:4px; 
}
.text-center {
    text-align: center;
}
.text-left {
    text-align: left;
}
.text-right {
    text-align: right;
}
.pull-left {
    float: left;
}
.pull-right {
    float: right;
}
hr {
    color:blue;
}
textarea {   
    background-color: whitesmoke;
    font-family: courier;
    border:0;
    width:100%;
    margin:5px;
    padding:3px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: blue;
}

input, select, textarea{
    background-color: whitesmoke;
    font-family: courier;
    font-size: 11px;
    font-weight:500;
    border:0;
    margin:5px;
    padding:3px;
    color: blue;
}

textarea:focus, input:focus {
    color: blue;
    font-weight:700;
}
/* Style the button that is used to open and close the collapsible content */
.collapsible {
    background-color: whitesmoke;
    color: black;
    font-weight:700;
    cursor: pointer;
    padding: 8px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 14px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.main a {
    color:black;
}
.container a {
    color:black;
}
.active, .collapsible:hover {
  background-color: transparent;
}
/* Style the collapsible content. Note: hidden by default */
.content {
    padding: 0 6px;
    display: none;
    overflow: hidden;
    
    font-size:14px;
    color:black;
    text-align: left;
    margin-left: 5px; 
}
.content a {
    margin-left: 10px;
}
.content > a:hover {
    background-color: lightgray;
    color:blue;
    text-decoration: none;
    
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 0;}
  .sidenav a {font-size: 18px;}
}



.td-title {
    font-size:10px;
    text-align: left;
    font-weight: bold;
    text-decoration: underline;
    color:black;
}
.td-left {
    font-size:10px;
    text-align: left;
    color:black;
}
.td-center {
    font-size:12px;
    text-align: center;
    color:blue;
}
.td-link {
    font-size:10px;
    text-align: left;
    font-weight: bold;
    text-decoration: underline;
    color:blue;
}
.tabcontent {
    display: none;

}


.nist-border {
    border-bottom: 1px solid gray;
}


.nist-title {
    font-size:14px;
    text-align: left;
    font-weight: bold;
    text-decoration: underline;
    color:black;
}
.nist-desc{
    font-family: sans;
    font-size:12px;
    text-align: left;
    font-style: italic;
    text-decoration: none;
    color:black;
}
.nist-left {
    font-family: sans;
    font-size: 12px;
    text-align: left;
    text-decoration: none;
    color:black;
}
.nist-center {
    font-size:12px;
    text-align: center;
    text-decoration: none;
    color:black;
}
.nist-link {
    font-size:12px;
    text-decoration: underline;
    color: blue;
}

.nist-link:hover {
    text-decoration: none;
    color: blue;
}


.td-nist-title {
    font-family: sans-serif;
    font-size:12px;
    text-align: left;
    font-weight: bold;
    text-decoration: underline;
    color:black;
}

.td-nist-title-center {
    font-family: sans-serif;
    font-size: 12px;
    text-align: center;
    font-weight: bold;
    text-decoration: underline;
    color: black;
}
.td-nist-left {
    font-size:10px;
    text-align: left;
    text-decoration: none;
    color:black;
}

.td-nist-center {
    font-size:10px;
    text-align: center;
    text-decoration: none;
    color:black;
}
.td-nist-link {
    font-size:10px;
    text-align: left;
    font-weight: bold;
    color:blue;
}

.td-mil-left {
    font-family: sans;
    font-size:10px;
    text-align: left;
    text-decoration: none;
    color:black;
    border-bottom: 1px gray solid;
}

li {
    text-decoration: none;
    color:black;
}
.crr {
    font-family: sans-serif;
    font-size:12px;
    text-align: left;
    text-decoration: none;
    color:black;
    border-bottom: 1px gray solid;
}
.crr-link {
    font-family: sans-serif;
    font-size:12px;
    text-align: left;
    text-decoration: none;
    color:black;
}
.crr-link:hover {
    font-family: sans-serif;
    font-size:12px;
    text-align: left;
    text-decoration: underline;
    color:blue;
}

.menu {
    margin-left:0px;
}
.menu a:hover{
    margin-left: 1px;0px;
 }
.icon:hover {
    color:blue;
}

input {
    background-color: white;
    color: black;
}

select {
    background-color: white;
    color: black;

}
option {
    background-color: white;
    color: black;
}

.pagebreak { page-break-before: always; } /* page-break-after works, as well */


.tier {
    border:1px solid black;
}
.tier-title {
    font-family: sans-serif;
    font-size:14px;
    text-align: left;
    font-weight: bold;
    text-decoration: underline;
    color:<?php echo $maincolor; ?>
    margin-left:5px;
}
.tier-text {
    font-family: sans;
    font-size:12px;
    text-align: left;
    font-weight: normal;
    text-decoration: none;
    color:black;
    margin-left:5px;
}
