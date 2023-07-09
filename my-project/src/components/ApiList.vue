<template>
    <div>
      <h1>API List</h1>
      <ul>
        <li v-for="api in apis" :key="api.id">{{ api.name }}</li>
      </ul>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        apis: [],
      };
    },
    mounted() {
      axios.get('/api/users')
        .then(response => {
          this.apis = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
  };
  </script>
