<template>
  <input class="input--range" type="range" :min="min" :max="max" :step="step" @input="handleInput">
</template>

<script>
export default {
  name: 'Range',
  props: {
    min: Number,
    max: Number,
    step: Number,
  },
  methods: {
    handleInput (event) {
      this.$emit('input', event.target.value)
    }
  }
}
</script>

<style scoped>
  input[type=range] {
  background: linear-gradient(250deg, #2ba1d4 0%,#2b57d4 100%);
  cursor: pointer;
  transition: all 0.5s;
  }
  input[type=range]:hover{
    opacity: 0.5;
  }

</style>
