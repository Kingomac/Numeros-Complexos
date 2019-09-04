<?php
$title = 'Realidade';
$active = array('','','','','active','');
$content = file_get_contents('./views/realidade.html');
$meta = file_get_contents('./meta/realidade.html');
$importVue = true;
$optionalJS = '<script async src="../public/js/realidade.js"></script>';
include('./layouts/main.php');
?>