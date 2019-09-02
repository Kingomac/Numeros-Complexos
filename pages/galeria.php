<?php
    $title = 'Galería';
    $active = array('','','','active','','');
    $content = file_get_contents('./views/galeria.html');
    $meta = file_get_contents('./meta/galeria.html');
    include('./layouts/main.php');
?>