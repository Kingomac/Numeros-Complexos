Vue.component('card', {
    template: //html
        `
    <div class="card">
        <a :href="href"><img :data-src="preview" class="card-img-top" :alt="title"></a>
        <div class="card-body">
            <a :href="href"><h5 class="card-title">{{title}}</h5></a>
            <p class="card-text">{{desc}}</p>
            <p class="card-text"><small class="text-muted">{{length}}</small></p>
        </div>
    </div>
    `,
    props: ['title', 'desc', 'preview', 'href', 'length']
})

const app = new Vue({
    el: '#app',
    mounted: function() {
        const observer = lozad('img');
        observer.observe();
    }
});