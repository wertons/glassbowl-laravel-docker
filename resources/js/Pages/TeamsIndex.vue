<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="My Teams">
                <ComponentsFormActionButton :icon="'fa-plus'" color="green" :href="`/teams/create`" />
            </ComponentsHeader>
        </template>
        <div class="overflow-x-auto">
            <table>
                <thead class="table-fixed">
                    <tr>
                        <th class="w-3/8">Name</th>
                        <th class="w-2/8">Description</th>
                        <th class="w-1/8">Created</th>
                        <th class="w-1/8">Owner</th>
                        <th class="actions w-1/4">Actions</th>
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

                            <ComponentsFormActionButton tooltip="Schools" color="yellow"
                                :href="'/schools/'+team.id+'/index'" :icon="'fa-layer-group'" />
                            <ComponentsFormActionButton tooltip="Members" color="blue" 
                                :href="'/teams/'+team.id+'/members'" :icon="'fa-users'" />
                            <ComponentsFormActionButton tooltip="Edit" color="green" :type="'post'"
                                :href="'/teams/'+team.id+'/edit'" :icon="'fa-edit'" />
                            <ComponentsFormActionButton tooltip="Delete" color="red" :type="'form'"
                                :href="'/teams/'+team.id" :icon="'fa-trash'" />

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
            document.querySelectorAll(".marketplace-searcher").forEach(input => {
                input.addEventListener("change", (ev) => {

                    let text = ev.target.value;
                    document.querySelectorAll(".searchable-" + ev.target.name).forEach(row => {
                        if (!row.innerHTML.includes(text.trim())) {
                            row.parentElement.classList.add("hidden");
                        } else {
                            row.parentElement.classList.remove("hidden");

                        }
                    });
                });
            });
        },
   
    }

</script>
