<?php
$title = 'Probando figuras';
$active = array('','','active','','','');
$meta = file_get_contents('../meta/videos/probando-figuras.html');
$optionalJS ='video-watch';
include('../layouts/main.php');
?>
<div class="container">
<?php
include('../views/videos/probando-figuras.php');
?>
</div>