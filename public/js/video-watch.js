Vue.component('videodesc', {
    template: //html
        `
    <div class="card mt-3">
    <div class="card-header">
        Descripción
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>{{value}}</p>
        </blockquote>
    </div>
    </div>
    `,
    props: ["value"]
});
Vue.component('escribir-comentario', {
    template: //html
        `
        <div>
    <button id="toggleButton" @click="showUseAccount = !showUseAccount" class="btn btn-secondary mb-1">Usar cuenta de usuario</button>
    <form method="POST" action="/videos/zoom-de-una-estrella">
    <div id="account" v-if="showUseAccount" class="card p-2">
    <small class="text-muted">Si no tienes una cuenta se creará automáticamente</small>
    <input name="nombre" class="form-control m-1" placeholder="Nombre de usuario">
    <input name="password" type="password" class="form-control m-1" placeholder="Contraseña">
    </div>
    <textarea name="contenido" class="form-control m-1 mt-2" placeholder="Escribe tu opinión sobre el vídeo"></textarea>
    <input name="submit" class="btn btn-primary m-1" type="submit" value="Comentar">
    </form>
    </div>
    `,
    data: function() {
        return {
            showUseAccount: false
        }
    }
})

const app = new Vue({
    el: '#app',
});