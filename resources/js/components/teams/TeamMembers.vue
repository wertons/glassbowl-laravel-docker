<template>

    <x-app-layout>
        <slot name="header">
            <Header title="Members">
                <FormActionButton class="fa-plus" color="green" :href="`/teams/${team.id}/invite`" />
            </Header>
        </slot>
        <div class="overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Owner</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in team.users" :key="user.id">
                        <td>
                            {{user.name}}
                        </td>
                        <td>
                            {{user.email}}
                        </td>
                        <td>
                            {{user.pivot.joined}}
                        </td>
                        <td class="actions">
                        </td>
                    </tr>
                </tbody>

            </table>
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


    export default {
        components: {
            Header,
            Label
        },
        data() {
            return {
                teamId: $route.params.team,
                team
            }
        },
        created() {
            axios
                .post(`api/teams/${teamId}/members`, {
                    _token: csrf_token,
                    _method: 'GET',
                }, {
                    "Content-Type": "application/x-www-form-urlencoded"
                }).then((ev) => {
                    team = ev.data.team;
                });
        },
        methods: {

        }
    };

</script>
