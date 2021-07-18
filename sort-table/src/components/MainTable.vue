<template>
    <div>
    <h1>Таблица VUE</h1>
    <input type="text" v-model="search" placeholder="Поиск по сотрудникам">
    <table>
      <tr><th>Пользователь <button v-on:click="sort('name')">Сортировать</button></th><th>Возраст <button v-on:click="sort('age')">Сортировать</button></th><th>Дата рождения</th><th>e-mail <button v-on:click="sort('email')">Сортировать</button></th><th>Номер телефона <button v-on:click="sort('phone')">Сортировать</button></th></tr>
      <Row
        :user="user"
        v-for="user of tableData"
        :key="user.id"
      />
    </table>
    </div>
</template>

<script>
import Row from '@/components/Row.vue'
export default{
  props: {
    users: {
      type: Array,
      required: true,
    },
  },
    data() {
    return {
      // sortedArr: JSON.parse(JSON.stringify(this.users)),
      directionName: 'asc',
      search: '',
    };
  },
    components: {
      Row,
    },
    methods: {
      sort(key) {
      if (this.directionName === 'asc') {
        this.sortAsc(key);
      } else if (this.directionName === 'desc') {
        this.sortDesc(key);
      } else if (this.directionName === 'origin') {
        this.origin();
      }
    },
    sortAsc() {
      this.directionName = 'desc';
    },
    sortDesc() {
      this.directionName = 'origin';
    },
    origin() {

      this.directionName = 'asc';
    },
  },
  computed: {
    tableData() {
      const key = ['username']
      const sortedArr = [...this.users].sort( this.directionName === 'asc' ? (a, b) => {
        if (a[key] < b[key]) {
          return -1;
        }

        if (a[key] > b[key]) {
          return 1;
        }

        return 0;
        } : (a, b) => {
        if (a[key] > b[key]) {
          return -1;
        }

        if (a[key] < b[key]) {
          return 1;
        }

        return 0;
      }) 
      const filtredArr = sortedArr.filter(item => {
        return item.username.includes(this.search)
      })
      return filtredArr
    },
  }
}

</script>

<style scoped>

</style>

//