require('./bootstrap');

window.Vue = require('vue');

import ExampleComponent from "./components/ExampleComponent";

const app = new Vue({
    el: '#app',
    components: {
        'example-component': ExampleComponent
    }
});


// Custom js code
let links = document.querySelectorAll('a[href="#"');

links.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
    });
});
