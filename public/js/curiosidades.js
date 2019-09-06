Vue.component('card', {
    template: //html
        `
    <div class="card col-md-3">
        <img :data-src="preview" class="card-img-top" :alt="title">
        <div class="card-body">
            <h5 class="card-title">{{title}}</h5>
            <p class="card-text">{{desc}}</p>
            <a :href="href" class="btn btn-primary">Ver más</a>
        </div>
    </div>
    `,
    props: ['preview', 'title', 'desc', 'href']
})

const app = new Vue({
    el: '#card-group',
    mounted: function() {
        const observer = lozad('img');
        observer.observe();
    }
});