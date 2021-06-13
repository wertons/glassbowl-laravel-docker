<template>

    <x-app-layout>
        <slot name="header">
            <Header title="My Invitations">
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

                    <div v-for="team in teams" :key="team">
                        <div v-for="user in team.users" :key="user">
                            <tr v-if="!user.pivot.joined && user.id == uid">
                                <td>
                                    {{team.name}}
                                </td>
                                <td>
                                    {{team.description}}
                                </td>
                                <td>
                                    {{team.created_at}}
                                </td>
                                <td>

                                    <div v-for="user in team.users" :key="user">
                                        <div v-if="user.pivot.isOwner">
                                            {{user.email}}
                                        </div>
                                    </div>

                                </td>
                                <td class="actions">
                                    <FormActionButton color="green" type="post" class="fa-check"
                                        :href="acceptInvite()" />
                                    <FormActionButton color="red" type="post" class="fa-times"
                                        :href="declineInvite()" />
                                </td>
                            </tr>
                        </div>
                    </div>

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
                teamId: $route.params.team ,
                teams,
                uid
            }
        },
        created() {
            axios
                .post(`api/teams/invitations`, {
                    _token: csrf_token,
                    _method: 'GET',
                }, {
                    "Content-Type": "application/x-www-form-urlencoded"
                }).then((ev) => {
                    teams = ev.data.teams;
                    uid = ev.data.uid;
                });
        },
        methods: {
            acceptInvite: function (ev) {
                axios
                    .post(`api/teams/${teamId}/accept`, {
                        _token: csrf_token,
                        _method: 'POST',
                    }, {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }).then(
                        $router.go(-1)
                    );
            },
            declineInvite: function (ev) {
                axios
                    .post(`api/teams/${teamId}/decline`, {
                        _token: csrf_token,
                        _method: 'POST',
                    }, {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }).then(
                        $router.go(-1)
                    );
            }
        }
    };

</script>
