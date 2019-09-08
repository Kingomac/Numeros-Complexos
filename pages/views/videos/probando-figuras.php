<?php
include('../../controllers/comments.php');
$video = 'probando-figuras';
?>
<h1>Vídeo probando figuras</h1>
<video class="embed-responsive" controls>
<source src="../resources/videos/parabolica.webm">
</video>
<div id="app">
    <videodesc value="Aquí muestro como pueden variar las figuras al mover el punto por el plano complejo"></videodesc>
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