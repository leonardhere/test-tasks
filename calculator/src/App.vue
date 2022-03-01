<template>
  <div id="app">
    <MainCalc />
  </div>
</template>

<script>
import MainCalc from './components/MainCalc'

export default {
  name: 'App',
  components: {
    MainCalc
  }
}
</script>

<style>
#app {
  font-family: 'Roboto', sans-serif;
  margin-bottom: 30px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
  padding: 5%;
  background: #2ba1d4;
  display: flex;
  justify-content: center;
}

.calculator__head h2{
  text-align: center;
}

.calculator__head{
  padding: 30px 67px;
  background-color: #fcfeff;
  box-shadow: 0 0 40px 0 rgb(0 0 0 / 10%);
  border-top-right-radius: 20px;
  border-top-left-radius: 20px;
  padding: 30px 67px
}
@media (max-width: 768px) {
  .calculator__head{
    padding: 30px 25px;
  }
}
</style>
