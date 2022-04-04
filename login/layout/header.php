<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../dist/css/AdminLTE.css">
<style>
.bg {
    /* The image used */
    background-image: url("../../dist/img/.jpg");

    /* Full height */
    height: 100%; 
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    .centered {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);        
        width: 50%;
        height: 50%;
    }

.bg-black-gradient {
    background: #111111 !important;
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #111111), color-stop(1, #2b2b2b)) !important;
    background: -ms-linear-gradient(bottom, #111111, #2b2b2b) !important;
    background: -moz-linear-gradient(center bottom, #111111 0%, #2b2b2b 100%) !important;
    background: -o-linear-gradient(#2b2b2b, #111111) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2b2b2b', endColorstr='#111111', GradientType=0) !important;
    color: #fff;
}
    </style>
    
    </head>
<body>
