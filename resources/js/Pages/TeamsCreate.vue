<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="Create new Team">
            </ComponentsHeader>
        </template>



        <div class="flex flex-col">
            <label for="name">Name</label>
            <input name="name" type="text" id="name">
            <label for="description">Description (Optional)</label>
            <input name="description" type="text" id="description">

            <div class="flex flex-row space-x-1 mt-4">
                <ComponentsFormButton href="/teams" color="red" icon="arrow-left">
                        Cancel
                    </ComponentsFormButton>
                    <ComponentsFormButton color="green" icon="save" type="submit"  @clicked="submit">Save</ComponentsFormButton>
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

        ],
        created: function () {

        },
        methods: {
            submit() {
                this.$inertia.post('/teams', {
                    title: document.querySelector("#name").value,
                    description: document.querySelector("#description").value,

                })
            }
        }
    }

</script>
