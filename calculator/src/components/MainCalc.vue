<template>
    <div class="main-calc">
        <div class="calculator__head">
            <h2 class="calculator__head-title">«Краткосрочный займ» в Таганроге</h2>
            <a @click="toggleElement" class="change_office">Выберите офис</a>
            <div v-if="isVisible" class="select-group">
              <Select :items="Regions" />
              <Select :items="Cities" />
              <Select :items="Departments" />
              <Select :items="Statuses" />
            </div>
            <div class="select-group-desktop">
              <Select :items="Regions" />
              <Select :items="Cities" />
              <Select :items="Departments" />
              <Select :items="Statuses" />
            </div>
        </div>

        <CalcBody />
    </div>
</template>

<script>
import Select from './Inputs/Select'
import CalcBody from './CalcBody'

export default {
  name: 'MainCalc',
  components: {
    Select,
    CalcBody
  },
  data() {
    return {
      isVisible : false,
      Regions: [
        { value: 'Значение', text: 'Ростовская область' },
        { value: 'Значение2', text: 'Краснодарский край' }
      ],
      Cities: [
        { value: 'Значение', text: 'Таганрог' },
        { value: 'Значение2', text: 'Ростов на Дону' },
      ],
      Departments: [
        { value: 'Значение', text: 'Выбрать отделение' },
      ],
      Statuses: [
        { value: 'Значение', text: 'Статус клиента' },
      ],
    }
  },
  methods: {
    toggleElement() {
      this.isVisible = !this.isVisible
    }
  }
}
</script>

<style scoped>
.main-calc {
    max-width: 1140px;
}
.select-group {
  display: flex;
  justify-content: space-evenly;
}
@media (max-width: 768px) {
  .select-group {
    flex-wrap: wrap;
  }
}
select {
  border-radius: 6px;
  background-color: #e6f1fa;
  border: none;
  font-size: 15px;
  letter-spacing: 0.3px;
  height: 48px;
  padding-left: 16px;
  padding-right: 36px;
  margin-right: 20px;
}

@media (max-width: 1024px) {
    select {
      width: 45%;
      margin-bottom: 20px;
  }
}

@media (max-width: 768px) {
  select {
    width: 45%;
  }
}
@media (min-width: 426px) {
  .change_office{
    display: none;
  }
}
@media (max-width: 425px) {
  select {
    width: 95%;
    margin-bottom: 20px;
    margin-right: 0;
  }
  .select-group{
    margin-top: 50px;
  }
  .calculator__head-title{
    margin-bottom: 50px;
  }
  .change_office{
      background: #ff4533;
      /* width: 220px; */
      padding: 24px 27px;
      border-radius: 100px;
      color: #ffffff;
      width: 100%;
      padding: 24px 55px;
  }
  .select-group-desktop{
    display: none;
  }
}
</style>
