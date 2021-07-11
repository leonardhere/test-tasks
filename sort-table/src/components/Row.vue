<template>
    <tr><td>{{user.name}}</td><td>{{user.age}}</td><td>{{user.datebirth}}</td></tr>
</template>

<script>
export default{
    props: {
        user: Object
    }
}

</script>

<style scoped>

</style>
