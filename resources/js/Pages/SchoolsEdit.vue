<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="Update School">
            </ComponentsHeader>
        </template>



        <div class="flex flex-col">

            <label for="title">Title</label>
            <input name="title" type="text" id="title" :value="school.title">
            <label for="description">Description (Optional)</label>
            <input name="description" type="text" id="description" :value="school.description">


            <div class="flex flex-row space-x-1 mt-4">
                <ComponentsFormButton :href="`/schools/${school.id}`" color="red" icon="arrow-left">
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
            'school'
        ],
        created: function () {

        },
        methods: {
            submit() {
                this.$inertia.put(`/schools/${this.school.id}`, {
                    title: document.querySelector("#title").value,
                    description: document.querySelector("#description").value,

                })
            },

        }
    }

</script>
