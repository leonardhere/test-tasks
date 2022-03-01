<template>
    <select>
        <option
          v-for="item in items" :key="item.value"
          :value="item.value"
        >{{ item.text }}</option>
    </select>
</template>

<script>
export default {
  name: 'Select',
  props: {
    items: Array
  }
}
</script>

<style scoped>
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
    -o-appearance: none;
    -ms-appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url(../../img/arrow.png);
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: 20px;
    cursor: pointer;
    
}
@media (max-width: 768px) {
    select {
        width: 45%;
        margin-bottom: 20px;
    }
}
@media (max-width: 425px) {
    select {
        width: 95%;
        margin-bottom: 20px;
        margin-right: 0;
    }
}
</style>