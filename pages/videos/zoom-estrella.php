<?php
$title = 'Zoom de una estrella';
$active = array('','','active','','','');
$meta = file_get_contents('../meta/videos/zoom-estrella.html');
$optionalJS ='video-watch';
include('../layouts/main.php');
?>
<div class="container mt-3">
<?php
include('../views/videos/zoom-estrella.php');
?>
</div>