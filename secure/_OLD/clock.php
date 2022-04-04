<!DOCTYPE html>
<html>
<head>
    <!-- Clock Code -->
    <script src="../js/clock.js"></script>

</head>

<body onload="startTime()">

R<div id="txt1">R</div><div id="dat1"></div>
B<div id="txt2">B</div><div id="dat2"></div>
Z<div id="txt3">Z</div><div id="dat3"></div>
L<div id="txt4">L</div><div id="dat4"></div>
P<div id="txt5">P</div><div id="dat5"></div>
D<div id="txt6">D</div><div id="dat6"></div>

<script>var d = (new Date()).toString().split(' ').splice(1,3).join(' ');

document.write(d)    
    </script>
</body>
</html>