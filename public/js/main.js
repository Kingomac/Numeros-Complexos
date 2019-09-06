requirejs.config({
    "paths": {
        "lozad": "https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min",
        "jquery": "https://code.jquery.com/jquery-3.4.1.slim.min",
        "bootstrap": "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min",
        "googleanalytics": "https://www.googletagmanager.com/gtag/js?id=UA-146721570-2"
    },
    "shim": {
        "bootstrap": ["jquery"],
    }
});
require(["lozad"], function(lozad) {
    window.lozad = lozad;
    const observer = lozad('img');
    observer.observe();
});
require(["bootstrap"]);

require(["googleanalytics"], function(googleanalytics) {
    window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-146721570-2');
});