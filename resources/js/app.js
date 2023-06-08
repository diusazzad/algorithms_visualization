import './bootstrap';

import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import NavBar from './components/navbar.vue';
app.component('navbar',NavBar);



app.mount('#app');
