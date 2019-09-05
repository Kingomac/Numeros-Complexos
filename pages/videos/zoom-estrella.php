<?php
$title = 'Zoom dunha estrela';
$active = array('','','active','','','');
$content = file_get_contents('../views/videos/zoom-estrella.html');
$meta = file_get_contents('../meta/videos/zoom-estrella.html');

include('../layouts/main.php');
?>