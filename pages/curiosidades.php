<?php
$title = 'Curiosidades';
$active = array('','active','','','','');
$content = file_get_contents('./views/curiosidades.html');
$meta = file_get_contents('./meta/curiosidades.html');
$importVue = true;
$optionalJS = '<script async src="../public/js/cards.min.js"></script>';

include('./layouts/main.php');
?>