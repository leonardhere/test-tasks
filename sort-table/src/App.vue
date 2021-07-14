<template>
  <div id="app">
    <MainTable
      :users="users"
    />
  </div>
</template>

<script>
import MainTable from '@/components/MainTable.vue'
import axios from 'axios'
export default {
  name: 'App',
  data() {
    return {
      users: []
      }
  },
    components: {
    MainTable,
  },
    created() {
    axios.get('static/users.json').then(response => {
          this.users = response.data
          console.log(this.users)
        }).catch(function (error) {
            console.log(error);
        })
  }

}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
    }
</style>
