<?php
$title = 'Zoom del agujero negro';
$active = array('','','active','','','');
$meta = file_get_contents('../meta/videos/zoom-agujero-negro.html');
$optionalJS ='video-watch';
include('../layouts/main.php');
?>
<div class="container mt-3">
<?php
include('../views/videos/zoom-agujero-negro.php');
?>
</div>