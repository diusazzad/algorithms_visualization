<template>
    <div class="app">
      <h1>Welcome to the App</h1>
      <router-view></router-view>
    </div>
  </template>

  <script>
  import Login from './components/auth/Login.vue';
  import Registration from './components/auth/Registration.vue';

  export default {
    components: {
      Login,
      Registration,
    },
  };
  </script>

  <style>
 
  </style>
