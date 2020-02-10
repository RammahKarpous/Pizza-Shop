require('./bootstrap');

window.Vue = require('vue');

import ExampleComponent from "./components/ExampleComponent";

const app = new Vue({
    el: '#app',
    components: {
        'example-component': ExampleComponent
    }
});

// Custom Scripts
// let input = document.querySelector('.search__input');
// let output = document.querySelector('.output');
//
// input.addEventListener('input', function (e) {
//     output.textContent = e.target.value;
// });
