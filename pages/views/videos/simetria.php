<?php
include('../../controllers/comments.php');
$video = 'simetria';
?>
<h1>Simetría entre o primeiro e o cuarto cuadrante</h1>
<video class="embed-responsive" controls>
        <source src="../resources/videos/simetria-prim-cua-cuadrante.webm">
    </video>
<div id="app">
    <videodesc value="Fíjate en como se mueve el punto y la simetría de las figuras al cambiar el cuadrante."></videodesc>
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