<?php
$title = 'Zoom dunha estrela';
$active = array('','','active','','','');
$content = file_get_contents('../views/videos/zoom-estrela.html');
$meta = file_get_contents('../meta/videos/zoom-estrela.html');

include('../layouts/main.php');
?>