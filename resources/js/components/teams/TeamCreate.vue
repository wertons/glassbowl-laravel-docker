<template>
    <x-app-layout>
        <slot name="header">
            <Header title="Create new Team">
            </Header>
        </slot>



        <div class="flex flex-col">

            <label for="title">Name</label>
            <input type="text" name="title" id="title" v-model="title">

            <label for="description">Description (Optional)</label>
            <input type="text" name="description" id="description" v-model="description">

            <div class="flex flex-row space-x-1">
                <FormButton color="red" icon="arrow-left">Cancel</FormButton>
                <FormButton color="green" icon="save" type="submit" @click="createTeam()">Save</FormButton>
            </div>

        </div>

    </x-app-layout>
</template>
<script>
    import Header from './../components/Header.vue';
    import FormButton from './../components/form/FormButton.vue';
    export default {
        data() {
            return {
                title,
                description,

            }
        },
        created() {

        },
        methods: {
            createTeam: function (ev) {
                axios
                    .post(`api/teams`, {
                        _token: csrf_token,
                        _method: 'POST',
                        name: title,
                        description
                    }, {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }).then(
                        $router.go(-1)
                    );
            }
        }
    };

</script>
