<?php
    $title = 'Galería';
    $active = array('','','','active','','');
    $content = file_get_contents('./views/galerias.html');
    $meta = file_get_contents('./meta/galerias.html');
    $importVue = true;
    $optionalJS = '<script async defer src="../public/js/galerias.js"></script>';
    include('./layouts/main.php');
?>