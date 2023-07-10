<template>
    <div>
      <h1>Registration</h1>
      <form @submit="register">
        <input type="text" v-model="name" placeholder="Name" required>
        <input type="email" v-model="email" placeholder="Email" required>
        <input type="password" v-model="password" placeholder="Password" required>
        <button type="submit">Register</button>
      </form>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        name: '',
        email: '',
        password: ''
      };
    },
    methods: {
      register() {
        // Make API request to register endpoint
        // You can use Axios or any other HTTP library of your choice
        axios.post('/register', {
          name: this.name,
          email: this.email,
          password: this.password
        })
        .then(response => {
          // Handle successful registration response
          console.log(response.data);
        })
        .catch(error => {
          // Handle registration error
          console.error(error);
        });
      }
    }
  };
  </script>
