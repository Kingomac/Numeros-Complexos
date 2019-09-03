<?php
$title = 'Círculos';
$active = array('','active','','','','');
$content = file_get_contents('../views/curiosidades/circulos.html');
$meta = file_get_contents('../meta/curiosidades/circulos.html');

include('../layouts/main.php');
?>