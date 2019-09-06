<?php
$title = 'Realidad';
$active = array('','','','','active','');
$content = file_get_contents('./views/realidad.html');
$meta = file_get_contents('./meta/realidad.html');
$importVue = true;
$optionalJS = 'realidad.min';
include('./layouts/main.php');
?>