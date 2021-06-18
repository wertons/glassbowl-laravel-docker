<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="My Invitations">
            </ComponentsHeader>
        </template>
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

                    <tr v-for="team in teams" :key="team.id">
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
                            <div v-for="user in team.users" :key="user.id">
                                <span v-if="user.pivot.isOwner">
                                    {{user.email}}
                                </span>
                            </div>
                        </td>
                        <td class="actions">
            
                            <ComponentsFormActionButton tooltip="Accept" color="green" :type="'post'"
                                :href="'/teams/'+team.id+'/accept'" :icon="'fa-check'" />
                            <ComponentsFormActionButton tooltip="Decline" color="red" :type="'post'"
                                :href="'/teams/'+team.id+'/decline'" :icon="'fa-times'" />
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>
    </LayoutsApp>
</template>
<script>
    import LayoutsApp from './LayoutsApp.vue';
    import ComponentsHeader from './ComponentsHeader.vue';
    import ComponentsFormActionButton from './ComponentsFormActionButton.vue';

    export default {
        data() {
            return {}
        },
        components: {
            LayoutsApp,
            ComponentsHeader,
            ComponentsFormActionButton
        },
        props: [
            'teams',

        ],
        updated: function () {

        },

    }

</script>
