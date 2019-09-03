Vue.component('card', {
    template: //html
        `
    <div class="card col-md-3">
        <img :src="preview" class="card-img-top" alt="simetria ejes">
        <div class="card-body">
            <h5 class="card-title">{{title}}</h5>
            <p class="card-text">{{desc}}</p>
            <a :href="href" class="btn btn-primary">Ver máis</a>
        </div>
    </div>
    `,
    props: ['preview', 'title', 'desc', 'href']
})

const app = new Vue({
    el: '#card-group'
});