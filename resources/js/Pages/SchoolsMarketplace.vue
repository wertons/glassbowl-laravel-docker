<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="Aquarium">
            </ComponentsHeader>
        </template>
        <div class="overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Owner</th>
                        <th class="actions">Actions</th>
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
                            <input type="text" class="marketplace-searcher" name="email"
                                placeholder="Filter by owner..."> </td>
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
                        <td class="searchable-email searchable">
                            {{school.userMail}}
                        </td>
                        <td class="actions">
                            <ComponentsFormActionButton tooltip="Download" color="green" :type="'post'"
                                :icon="'fa-download'" :href="`/schools/${school.id}/getSchool`" />
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
        components: {
            LayoutsApp,
            ComponentsHeader,
            ComponentsFormActionButton
        },
        props: [
            'schools',
            'team'
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
        }
    }

</script>
