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

const app = new Vue({
    el: '#app',
    data: {
        showUseAccount: true,
        flip: 0,
    }
});