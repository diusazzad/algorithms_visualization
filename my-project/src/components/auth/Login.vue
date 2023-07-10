<template>
    <div>
      <h1>Login</h1>
      <form @submit="login">
        <input type="email" v-model="email" placeholder="Email" required>
        <input type="password" v-model="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        email: '',
        password: ''
      };
    },
    methods: {
      login() {
        // Make API request to login endpoint
        // You can use Axios or any other HTTP library of your choice
        axios.post('/login', {
          email: this.email,
          password: this.password
        })
        .then(response => {
          // Handle successful login response
          console.log(response.data);
        })
        .catch(error => {
          // Handle login error
          console.error(error);
        });
      }
    }
  };
  </script>
