<?php
include('../../controllers/comments.php');
$video = 'zoom-agujero-negro';
?>
<h1>Zoom del agujero negro</h1>
<video class="embed-responsive" controls>
        <source src="../resources/videos/zoom-buraco-negro.webm">
    </video>
<div id="app">
    <videodesc value="Si aun no lo hiciste échale un vistazo a la sección de realidad."></videodesc>
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