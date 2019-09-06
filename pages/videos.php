<?php
$title = 'Vídeos';
$active = array('','','active','','','');
$content = file_get_contents('./views/videos.html');
$meta = file_get_contents('./meta/videos.html');
$optionalJS = 'videos.min';
include('./layouts/main.php');
?>