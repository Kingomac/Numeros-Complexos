<?php
$title = 'Simetría entre el primer y el cuarto cuadrante';
$active = array('','','active','','','');
$content = file_get_contents('../views/videos/simetria.html');
$meta = file_get_contents('../meta/videos/simetria.html');
$optionalJS ='video-watch';
include('../layouts/main.php');
?>