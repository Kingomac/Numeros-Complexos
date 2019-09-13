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
    <form id="comments-form">
    <div id="account" v-if="showUseAccount" class="card p-2">
    <small class="text-muted">Si no tienes una cuenta se creará automáticamente</small>
    <input id="nombre" class="form-control m-1" placeholder="Nombre de usuario">
    <input id="password" type="password" class="form-control m-1" placeholder="Contraseña">
    </div>
    <textarea id="contenido" class="form-control m-1 mt-2" placeholder="Escribe tu opinión sobre el vídeo"></textarea>
    <button id="submitComment" class="btn btn-primary m-1" type="submit">Comentar</button>
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

$(function() {
    leerComentarios();
    $('#comments-form').submit((e) => {
        e.preventDefault();
        const postData = {
            nombre: $('#nombre').val(),
            password: $('#password').val(),
            contenido: $('#contenido').val(),
            video: getVideo()
        };
        $.post("/controllers/AddComment.php", postData, (resp) => {
            console.log(resp);
            if (resp == 'Datos de usuario incorrectos') {
                $('#account').attr('class', 'border border-danger card p-2');
                $('#account').append('<small id="log-error" class="text-danger">Datos incorrectos</small>');
            } else {
                $('#comments-form').trigger('reset');
                $('#account').attr('class', 'border border-success card p-2');
                leerComentarios();
                try {
                    $('#account').remove('<small id="log-error" class="text-danger">Datos incorrectos</small>');
                } catch (e) {}
            }
        });

    });
});

function getVideo() {
    let link = location.href.split('/');
    return link[link.length - 1];
}

function leerComentarios() {
    const postData = { video: getVideo() };
    $.post("/controllers/ListComments.php", postData, (resp) => {
        let elemento = JSON.parse(resp);
        let template = '';

        elemento.forEach(comentario => {
            template += '<div class="card m-1 p-1"><h6 class="card-title">' + comentario.usuario + '</h6><p class="card-text">' + comentario.contenido + '</p></div>';
        });
        $('#comentarios').html(template);
    });
}