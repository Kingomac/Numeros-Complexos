<?php
$title = 'Zoom del agujero negro';
$active = array('','','active','','','');
$content = file_get_contents('../views/videos/zoom-agujero-negro.html');
$meta = file_get_contents('../meta/videos/zoom-agujero-negro.html');
$optionalJS ='video-watch';
include('../layouts/main.php');
?>