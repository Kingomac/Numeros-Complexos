requirejs.config({
    "paths": {
        "lozad": "https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min",
        "jquery": "https://code.jquery.com/jquery-3.4.1.min",
        "bootstrap": "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min",
        "googleanalytics": "https://www.googletagmanager.com/gtag/js?id=UA-146721570-2",
        vue: "https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min",
    },
    "shim": {
        "bootstrap": ["jquery"],
        "lozad": ['vue'],
        'video-watch.min': ['jquery', 'vue'],
        'videos.min': ['vue'],
        'galerias.min': ['vue'],
        'realidad.min': ['vue'],
        'curiosidades.min': ['vue'],
    }
});
require(["lozad"], function(lozad) {
    window.lozad = lozad;
    const observer = lozad('img');
    observer.observe();
});
require(["bootstrap"], () => {});

require(['vue'], (e) => { window.Vue = e });

require(["googleanalytics"], function(googleanalytics) {
    window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-146721570-2');
});

function getPage() {
    let link = location.href.split('/');
    return link[link.length - 1];
}
if (getPage() == 'videos') {
    require(['videos.min'], () => {});
} else if (location.href.includes('videos')) {
    require(['video-watch.min'], () => {});
} else if (getPage() !== 'editada-hd' && getPage() !== 'como-hacerlo-en-geogebra' && !location.href.includes('/curiosidades/')) {
    require([getPage() + '.min'], () => {})
}