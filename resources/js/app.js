/* import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

app.mount('#app'); */

require('./bootstrap');

window.Vue = require('vue').default;

const app = new Vue({
    el: '#app',
    mounted() {
        window.Eco.channel('estado-citas').listen('CitaEstadoEvent', (e) => {
            console.log(e+'Evento Escichado');
        });
    }
});