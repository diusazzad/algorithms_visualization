<template>
    <div class=" ">
        <!-- <h1>API List</h1>
      <ul>
        <li v-for="api in apis" :key="api.id">{{ api.name }}</li>
      </ul> -->

        <div class="m-3">
            <div>
                <a href="">Home</a>
                <a href="">Algorithm</a>
                <a href="">About</a>
            </div>
        </div>
        <div class="">
            <div class="">right part menu</div>
            <div class="rightmain">right menu</div>
        </div>
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
