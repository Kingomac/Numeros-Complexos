Vue.component('card', {
    template: //html
        `
    <div :class="['card', 'col-sm', color, 'text-white', 'rounded', 'm-1']">
    <div class="card-body">
      <h5 class="card-title">{{title}}</h5>
      <div class="row text-center">
      <div class="col-md">
      <img class="img-fluid rounded" :data-src="img1" :alt="title"/>
      </div>
      <div class="col-md">
      <img class="img-fluid rounded" :data-src="img2"/>
      </div>
      </div>
    </div>
  </div>
    `,
    props: ['title', 'href', 'color', 'img1', 'img2']
});

const app = new Vue({
    el: '#app',
    data: {
        posibleColors: ['bg-info', 'bg-success', 'bg-dark', 'bg-warning', 'bg-danger', 'bg-secondary', 'bg-primary'],
    },
    computed: {
        color() {
            return this.posibleColors[Math.floor(Math.random() * this.posibleColors.length)];
        }
    },
    mounted: function() {
        const observer = lozad('img');
        observer.observe();
    }
})