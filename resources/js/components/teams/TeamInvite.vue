<template>


    <x-app-layout>
        <slot name="header">
            <Header title="Invite new member">
            </Header>
        </slot>

    

        <div class="flex flex-col">

            <label for="email">Email</label>
            <input type="text" name="email" id="email" v-model="email">

            <div class="flex flex-row space-x-1">
                <Button color="red"
                    icon="arrow-left">Cancel</Button>
                <Button color="green" icon="save" type="button" @click="inviteUser()">Save</Button>
            </div>

        </div>

    </x-app-layout>
</template>
<script>
    import Header from './../components/Header.vue';
    import ApplicationLogo from './../components/ApplicationLogo.vue';
    import Label from './../components/Label.vue';
    import Button from './../components/Button.vue';
    import AuthCard from './../components/AuthCard.vue';
    import FormActionButton from './../components/form/FormActionButton.vue';
    import AuthSessionStatus from './../components/AuthSessionStatus.vue';
    import AuthValidationErrors from './../components/AuthValidationErrors.vue';
    import Input from './../components/Input.vue';
    import Axios from 'axios';

    export default {
        components: {
            Header,
            Label
        },
        data() {
            return {
                team: this.team,
                email,
                csrf_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

            }
        },
        created() {

        },
        methods: {
            inviteUser: function (ev) {
                axios
                .post(`api/teams/${team}/invite`,{
                    _token: csrf_token,
                    _method: 'POST',
                    email,
                },{
                    "Content-Type":"application/x-www-form-urlencoded"
                }).then(

                );
            },
        }
    };

</script>
