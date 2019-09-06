<?php
$title = 'Curiosidades';
$active = array('','active','','','','');
$content = file_get_contents('./views/curiosidades.html');
$meta = file_get_contents('./meta/curiosidades.html');
$optionalJS = 'curiosidades.min';

include('./layouts/main.php');
?>