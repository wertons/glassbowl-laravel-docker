<template>

    <x-app-layout>
        <slot name="header">
            <Header title="Create new School">
            </Header>
        </slot>
        <div class="flex flex-col" v-if="team == null">

            <label for="title">Title</label>
            <input type="text" name="title" id="title">

            <label for="description">Description (Optional)</label>
            <input type="text" name="description" id="description">

            <div class="flex flex-row space-x-1">
              <FormButton color="red" icon="arrow-left">Cancel</FormButton>
                <FormButton color="green" icon="save" type="submit" @click="createSchool()">Save</FormButton>
             </div>


        </div>

        <div class="flex flex-col" v-else>

            <label for="title">Title</label>
            <input type="text" name="title" id="title" v-model="title">

            <label for="description">Description (Optional)</label>
            <input type="text" name="description" id="description" v-model="description">
            <div class="flex flex-row space-x-1">
                <FormButton color="red" icon="arrow-left">Cancel</FormButton>
                <FormButton color="green" icon="save" type="submit" @click="createSchoolTeam()">Save</FormButton>
            </div>


        </div>

    </x-app-layout>
</template>
<script>
    import Header from './../components/Header.vue';
    import FormButton from './../components/form/FormButton.vue';
    export default {
        name:'SchoolCreate',
        data() {
            return {
                team: this.$route.params.team ?? false,
                title,
                description,

            }
        },
        created() {

        },
        methods: {
            createSchool: function (ev) {
                axios
                    .post(`api/schools/store`, {
                        _token: csrf_token,
                        _method: 'POST',
                        title,
                        description,
                        url
                    }, {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }).then(
                        $router.go(-1)
                    );
            },
            createSchoolTeam: function (ev) {
                axios
                    .post(`api/schools/${team}/store`, {
                        _token: csrf_token,
                        _method: 'POST',
                        title,
                        description
                    }, {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }).then(
                        $router.go(-1)
                    );
            },
        }
    };

</script>
