<?php
$title = 'Simetría entre el primer y el cuarto cuadrante';
$active = array('','','active','','','');
$meta = file_get_contents('../meta/videos/simetria.html');
$optionalJS ='video-watch';
include('../layouts/main.php');
?>
<div class="container mt-3">
<?php
include('../views/videos/simetria.php');
?>
</div>