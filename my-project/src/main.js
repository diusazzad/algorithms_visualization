// import { createApp } from 'vue'
// import './style.css'
// import App from './App.vue'
// createApp(App).mount('#app')


import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import axios from 'axios';
import App from './App.vue';
import Login from './components/auth/Login.vue';
import Registration from './components/auth/Registration.vue';




axios.defaults.baseURL = 'http://localhost:8000'; // Update with your Laravel server URL

const app = createApp(App);
app.mount('#app');
