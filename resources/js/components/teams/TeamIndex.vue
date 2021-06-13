<template>
    

<x-app-layout>
    <slot name="header">
        <Header title="My Teams">
            <FormActionButton class="fa-plus" color="green" :href="route('teams.create', [])" />
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

                <div v-for="user in team.users" :key="user" >
                    <tr  v-if="user.id == auth.user.id && user.pivot.joined">
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
                        <FormActionButton color="green" class="fa-columns" :href="route('schools.teamIndex', ['team'=>$team])" />
                        <FormActionButton color="blue" class="fa-users" :href="route('teams.members', ['team'=>$team])" />
                        <FormActionButton color="green" class="fa-edit" :href="route('teams.edit', ['team'=>$team])" />
                        <FormActionButton color="red" type="form" class="fa-trash" :href="route('teams.destroy', ['team'=>$team])" />
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
import ApplicationLogo from './../components/form/ApplicationLogo.vue';
import Label from './../components/form/Label.vue';
import Button from './../components/Button.vue';
import AuthCard from './../components/AuthCard.vue';
    import FormActionButton from './../components/form/FormActionButton.vue';
    import AuthSessionStatus from './../components/AuthSessionStatus.vue';
    import AuthValidationErrors from './../components/AuthValidationErrors.vue';
    import Input from './../components/Input.vue';


    export default {
  components: { Header, Label },
        data() {
            return {
                teams: this.teams
            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
