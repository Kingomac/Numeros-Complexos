const app = new Vue({
    el: '#app',
    data: {
        randomNumber: Math.floor(Math.random() * 10) + 1
    }
})