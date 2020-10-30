<template>
    <div class="container">
        <h2>This is my custom tab component</h2>
        <div class="list-group">
            <a class="list-group-item" v-for="user in users" v-bind:key="user.id">
                {{ user.name }}
            </a>
        </div>
        <div class="list-group">
            <a class="list-group-item" v-for="category in categories" v-bind:key="category.id">
                {{ category.name }}
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            users: [],
            categories: [],
        }
    },

    mounted() {
        this.loadUsers();
        this.loadCategories();
    },

    methods:{
        loadUsers: function(){
            axios.get('/api/users')
            .then((response) => {
                this.users = response.data.users;
            })
            .catch(function(error){
                console.log(error);
            })
        },
        loadCategories: function(){
            axios.get('/api/categories')
            .then((response) => {
                this.categories = JSON.parse(JSON.stringify(response.data.data));
            })
            .catch(function(error){
                console.log(error);
            })
        },
    },
}
</script>