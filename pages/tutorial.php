<?php
$title = 'Como hacerlo en GeoGebra';
$active = array('','','','','','active');
$content = file_get_contents('./views/tutorial.html');
$meta = file_get_contents('./meta/tutorial.html');
include('./layouts/main.php');
?>