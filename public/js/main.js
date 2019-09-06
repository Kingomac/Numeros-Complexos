requirejs.config({
    "paths": {
        "jquery": "https://code.jquery.com/jquery-3.2.1.slim.min",
        "popper": "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min",
        "bootstrap": "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min",
        "googleanalytics": "https://www.googletagmanager.com/gtag/js?id=UA-146721570-2",
    },
    "shim": {
        "bootstrap": ["jquery"],
    }
});

require(["popper"], function(popper) {
    // set popper as required by Bootstrap
    window.Popper = popper;
    require(["bootstrap"], function(bootstrap) {
        // do nothing - just let Bootstrap initialise itself
    });
});
require(["googleanalytics"], function(googleanalytics) {
    window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-146721570-2');
});