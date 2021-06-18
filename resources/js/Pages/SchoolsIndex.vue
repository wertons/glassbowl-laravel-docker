<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="My Schools">
                <ComponentsFormActionButton :icon="'fa-plus'" color="green" :href="'/schools/create'" v-if="team == null" />
                <ComponentsFormActionButton :icon="'fa-plus'" color="green" :href="'/schools/'+team.id+'/create'" v-else />
            </ComponentsHeader>
        </template>
        <div class="overflow-x-auto">
            <table>
                <thead class="table-fixed">
                    <tr>
                        <th class="w-3/8">Title</th>
                        <th class="w-2/8">Description</th>
                        <th class="w-1/8">Created</th>
                        <th class="w-1/4 actions">Actions</th>
                        <th class="w-1/8"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" class="marketplace-searcher" name="title"
                                placeholder="Filter by title..."> </td>
                        <td>
                            <input type="text" class="marketplace-searcher" name="description"
                                placeholder="Filter by description..."> </td>
                        <td>
                            <input type="text" class="marketplace-searcher" name="created"
                                placeholder="Filter by date..."> </td>
                        <td>
                        <td class="actions">
                        </td>
                    </tr>
                    <tr v-for="school in schools" :key="school.id">
                        <td class="searchable-title searchable">
                            {{school.title}}
                        </td>
                        <td class="searchable-description searchable">
                            {{school.description}}
                        </td>
                        <td class="searchable-created searchable">
                            {{school.created_at}}
                        </td>
                        <td class="actions">
                            <ComponentsFormActionButton tooltip="Fishes" color="yellow" 
                                :href="'fish/'+school.id" :icon="'fa-fish'"/>
                            <ComponentsFormActionButton tooltip="Share" color="green" :type="'post'" ç
                                :href="'/schools/'+school.id+'/share'" :icon="'fa-share'"
                                v-if="school.user_id != null && school.shared == false" />
                            <ComponentsFormActionButton tooltip="Unshare" color="red" :type="'post'" :icon="'fa-share'"
                                :href="'/schools/'+school.id+'/unshare'" v-else />
                            <ComponentsFormActionButton tooltip="Edit" color="green" :icon="'fa-edit'"
                                :href="'/schools/'+school.id+'/edit'" />
                            <ComponentsFormActionButton tooltip="Delete" color="red" :type="'form'" :icon="'fa-trash'"
                                :href="'/schools/'+school.id" />
                        </td>
                        <td></td>
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
        components: {
            LayoutsApp,
            ComponentsHeader,
            ComponentsFormActionButton
        },
        props: [
            'schools',
            'team'
        ],
        updated : function () {
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
        }
    }

</script>
