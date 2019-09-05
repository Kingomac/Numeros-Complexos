<?php
$title = 'Realidad';
$active = array('','','','','active','');
$content = file_get_contents('./views/realidad.html');
$meta = file_get_contents('./meta/realidad.html');
$importVue = true;
$optionalJS = '<script async src="../public/js/realidad.min.js"></script>';
include('./layouts/main.php');
?>