<?php
    $title = 'Galería';
    $active = array('','','','active','','');
    $content = file_get_contents('./views/galerias.html');
    $meta = file_get_contents('./meta/galerias.html');
    include('./layouts/main.php');
?>