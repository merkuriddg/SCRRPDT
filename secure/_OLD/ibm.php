<?php $string = 'Fluorine, Silicon, Indium, Fluorine, Chromium, Dysprosium';
$new_string = eregi_replace("n{2,}", "n", $string);
$result = count_chars( $string, 3);
echo $new_string;
echo $result;
?>