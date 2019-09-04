<?php
$title = 'Galería editada HD';
$active = array('','','','active','','');
$content = file_get_contents('../views/galerias/1.html');
$meta = file_get_contents('../meta/galerias/1.html');

include('../layouts/main.php');
?>