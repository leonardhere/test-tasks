<template>
    <tr><td>{{user.person.name}}</td><td>{{user.age}}</td><td>{{user.person.birthday}}</td></tr>
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
