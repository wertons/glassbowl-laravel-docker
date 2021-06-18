<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="Edit Team">
            </ComponentsHeader>
        </template>



        <div class="flex flex-col">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" :value="team.name">
            <label for="description">Description</label>
            <input name="description" type="text" id="description" :value="team.description">


            <div class="flex flex-row space-x-1 mt-4">
                <ComponentsFormButton href="/teams" color="red" icon="arrow-left">
                    Cancel
                </ComponentsFormButton>
                <ComponentsFormButton color="green" icon="save" type="submit" @clicked="submit">Save
                </ComponentsFormButton>

            </div>


        </div>

    </LayoutsApp>
</template>
<script>
    import LayoutsApp from './LayoutsApp.vue';
    import ComponentsHeader from './ComponentsHeader.vue';
    import ComponentsFormActionButton from './ComponentsFormActionButton.vue';
    import ComponentsFormButton from './ComponentsFormButton.vue';

    export default {
        components: {
            LayoutsApp,
            ComponentsHeader,
            ComponentsFormActionButton,
            ComponentsFormButton

        },
        props: [
            'team'
        ],
        created: function () {

        },
        methods: {
            submit() {
                this.$inertia.put(`/teams/${this.team.id}`, {
                    name: document.querySelector("#name").value,
                    description: document.querySelector("#description").value,

                })
            },

        }
    }

</script>
