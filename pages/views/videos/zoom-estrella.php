<?php
include('../../controllers/comments.php');
$video = 'zoom-de-una-estrella';
?>
<h3>Zoom de una estrella</h3>
<video class="embed-responsive" controls>
        <source src="../resources/videos/zoom0.mp4">
</video>
<div id="app">
    <videodesc value="Zoom de una estrella con puntos en coordenadas muy altas que no permiten ver la forma completa."></videodesc>
    <div class="card mt-2">
    <div class="card-header">
    Comentarios
    </div>
    <div class="card-body">
    <escribir-comentario></escribir-comentario>
    <?php leerComentarios($video) ?>
    </div>
    </div>
</div>

<?php
if(isset($_POST['submit'])){
    if($_POST['nombre'] !== '' && $_POST['password'] !== ''){
    publicarComentario($_POST['nombre'], $_POST['password'], $_POST['contenido'], $video);
    echo "<meta http-equiv='refresh' content='0'>";
    }
    else{
        publicarComentario(null, null, $_POST['contenido'], $video);
        echo "<meta http-equiv='refresh' content='0'>";
    }
}
?>