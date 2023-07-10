// import './bootstrap';

// import { createApp } from 'vue';

// const app = createApp({});

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);

// import NavBar from './components/navbar.vue';
// app.component('navbar',NavBar);



// app.mount('#app');

require('./bootstrap');

// require('alpinejs');

import { createApp } from 'vue';
import router from './router'

import CompaniesIndex from '@/components/companies/CompaniesIndex.vue';

createApp({
    components: {
        CompaniesIndex
    }
}).use(router).mount('#app')
