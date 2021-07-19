<template>
    <tr>
        <td>{{user.person.name}}</td>
        <td>{{userAge}}</td>
        <td>{{user.person.birthday}}</td>
        <td>
            <p v-if="user.email">{{user.email}}</p>
            <p v-else>Нет данных</p>
        </td>
        <td>
            <p v-if="user.phone">{{user.phone}}</p>
            <p v-else>Нет данных</p>
        </td>
        <td>
            {{printArr}}
        </td>
    </tr>
</template>

<script>
export default{
    props: {
        user: Object,
    },
    computed: {
        userAge: function() {
            const today = new Date(); 
            const birthday = new Date(this.user.person.birthday);
            const todayD = (today.getFullYear()*12 + today.getMonth())*31+today.getDate()-1;
            const birthdayD = (birthday.getFullYear()*12 + birthday.getMonth())*31+birthday.getDate()-1;
            const age = (todayD - birthdayD)/31/12;
            const floorAge = Math.floor(age)
            return floorAge
        },
        printArr: function() {
            return Object.values(this.user.person).join(' ')
        }
    },
}

</script>

<style scoped>

</style>
