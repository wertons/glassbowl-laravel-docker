<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="Update Fish">
            </ComponentsHeader>
        </template>



        <div class="flex flex-col">

            <label for="title">Title</label>
            <input name="title" type="text" id="title" :value="fish.title">
            <label for="description">Description (Optional)</label>
            <input name="description" type="text" id="description" :value="fish.description">
            <label for="url">URL</label>
            <input name="url" type="text" id="url" :value="fish.url">

            <div class="flex flex-row space-x-1 mt-4">
                <ComponentsFormButton :href="`/fish/${school.id}`" color="red" icon="arrow-left">
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
            'school',
            'fish'
        ],
        created: function () {

        },
        methods: {
            submit() {
                this.$inertia.put(`/fish/${this.school.id}/${this.fish.id}`, {
                    title: document.querySelector("#title").value,
                    description: document.querySelector("#description").value,
                    url: document.querySelector("#url").value,

                })
            },

        }
    }

</script>
