<template>
    <div>
    <h1>Таблица VUE</h1>
    <input type="text" v-model="search" placeholder="Поиск по сотрудникам">
    <table>
      <tr><th>Пользователь <button v-on:click="sort('name')">Сортировать</button></th><th>Возраст <button v-on:click="sort('age')">Сортировать</button></th><th>Дата рождения</th></tr>
      <Row
        :user="user"
        v-for="user of users"
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
      sortedArr: JSON.parse(JSON.stringify(this.users)),
      directionName: 'asc',
      search: ''
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
    sortAsc(key) {
      this.sortedArr.sort((a, b) => {
        if (a[key] < b[key]) {
          return -1;
        }

        if (a[key] > b[key]) {
          return 1;
        }

        return 0;
      });

      this.directionName = 'desc';
    },
    sortDesc(key) {
      this.sortedArr.sort((a, b) => {
        if (a[key] > b[key]) {
          return -1;
        }

        if (a[key] < b[key]) {
          return 1;
        }

        return 0;
      });

      this.directionName = 'origin';
    },
    origin() {
      this.sortedArr = JSON.parse(JSON.stringify(this.users));

      this.directionName = 'asc';
    },
  },
  computed: {
    searchUsers() {
      if (this.search) {
        return this.users.filter(item => {
          return item.name.includes(this.search)
        })
      }
      return this.users
    }
  }
}

</script>

<style scoped>

</style>