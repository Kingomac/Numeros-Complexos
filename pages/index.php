<?php
$title = 'Inicio';
$active = array('active','','','','','');
$content = file_get_contents('./views/index.html');
$meta = file_get_contents('./meta/index.html');

include('./layouts/main.php');
?>