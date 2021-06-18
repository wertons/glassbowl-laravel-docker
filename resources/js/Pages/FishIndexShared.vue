<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader :title="`${school.title}'s Fishes`">
                <div v-on:click="openAllFish">
                    <ComponentsButton class="mr-8 bg-blue-600 text-white-800">
                        All fishes
                    </ComponentsButton>
                </div>
            </ComponentsHeader>
        </template>
        <div class="overflow-x-auto">
            <table class="table-fixed">
                <thead>
                    <tr>
                        <th class="w-3/8">Fish</th>
                        <th class="w-2/8">Description</th>
                        <th class="w-1/8">Created</th>
                        <th class="w-1/8 actions">Actions</th>
                        <th class="w-1/8"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="fish in fishs" :key="fish.id">
                        <td>

                            <a :href="fish.url" target="_blank">
                                <ComponentsButton class="bg-blue-600 text-white-800">
                                    {{fish.title}}
                                </ComponentsButton>
                            </a>
                        </td>
                        <td>
                            {{fish.description}}
                        </td>
                        <td>
                            {{fish.created_at}}
                        </td>

                        <td class="actions">
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
    import ComponentsButton from './ComponentsButton.vue';

    export default {
        components: {
            LayoutsApp,
            ComponentsHeader,
            ComponentsFormActionButton,
            ComponentsButton
        },
        props: [
            'fishs',
            'school'
        ],
        created: function () {

        },
        methods: {
            openAllFish() {
                console.log("test")
                if (confirm("Open all Fish in the school?")) {
                    this.fishs.forEach(fish => {
                        window.open(fish.url, '_blank');
                    })
                }
            }
        }
    }

</script>
