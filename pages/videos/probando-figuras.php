<?php
$title = 'Probando figuras';
$active = array('','','active','','','');
$content = file_get_contents('../views/videos/probando-figuras.html');
$meta = file_get_contents('../meta/videos/probando-figuras.html');
$optionalJS ='video-watch';
include('../layouts/main.php');
?>