<template>
  <div id="app">
    <MainTable
      :users="users"
    />
  </div>
</template>

<script>
import MainTable from '@/components/MainTable.vue'
export default {
  name: 'App',
  data() {
    return {
      users: [ 
        { id: 1, name: 'Андрей', age: 18, datebirth: '10.05.2003' } , 
        { id: 2, name: 'Игорь', age: 20, datebirth: '17.08.2001' }, 
        { id: 3, name: 'Ольга', age: 23, datebirth: '03.04.1998' }, 
        { id: 4, name: 'Никита', age: 19, datebirth: '08.06.2002' },
        { id: 5, name: 'Оксана', age: 30, datebirth: '03.09.1991' }
         ]
      }
  },
    components: {
    MainTable,
  },

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
