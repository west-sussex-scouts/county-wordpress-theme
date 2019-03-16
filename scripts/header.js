import { CookieConsent } from 'cookieconsent';
window.addEventListener("load", function () {
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#7413dc"
            },
            "button": {
                "background": "#ffe627"
            }
        },
        "theme": "edgeless"
    })
});