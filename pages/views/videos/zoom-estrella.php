<?php
include('../../controllers/comments.php');
?>
<h3>Zoom de una estrella</h3>
<video class="embed-responsive" controls>
        <source src="../resources/videos/zoom0.mp4">
    </video>
<div id="app">
    <videodesc value="Zoom de una estrella con puntos en coordenadas muy altas que no permiten ver la forma completa."></videodesc>
    <form method="POST" action="/videos/zoom-de-una-estrella">
    <button id="toggleButton" @click="showUseAccount = !showUseAccount" class="btn btn-secondary form-control">Use account</button>
    <div id="account" v-if="showUseAccount" class="card p-2">
        <small class="text-muted">Si no tienes una cuenta se creará automáticamente</small>
        <input name="nombre" class="form-control m-1" placeholder="Nombre de usuario">
        <input name="password" class="form-control m-1" placeholder="Contraseña">
    </div>
    <textarea name="contenido" class="form-control m-1" placeholder="Escribe tu opinión sobre el vídeo"></textarea>
    <input name="submit" class="btn btn-primary m-1" type="submit" value="Comentar">
    </form>
</div>

<?php
if(isset($_POST['submit'])){
    publicarComentario($_POST['nombre'], $_POST['password'], $_POST['contenido'], 'zoom-de-una-estrella');
}
?>