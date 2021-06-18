<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="Create new School">
            </ComponentsHeader>
        </template>
        <div class="flex flex-col" v-if="!team">
            <label for="title">Title</label>
            <input name="title" type="text" id="title">
            <label for="description">Description (Optional)</label>
            <input name="description" type="text" id="description">
                <div class="flex flex-row space-x-1 mt-4">
                    <ComponentsFormButton href="/schools" color="red" icon="arrow-left">
                        Cancel
                    </ComponentsFormButton>
                    <ComponentsFormButton color="green" icon="save" type="submit"  @clicked="submit">Save</ComponentsFormButton>
                </div>
        </div>
        <div class="flex flex-col" v-else>
            <label for="title">Title</label>
            <input name="title" type="text" id="title">
            <label for="description">Description (Optional)</label>
            <input name="description" type="text" id="description">
                <div class="flex flex-row space-x-1 mt-4">
                    <ComponentsFormButton :href="`/schools/${team.id}/index`" color="red" icon="arrow-left">
                        Cancel
                    </ComponentsFormButton>
                    <ComponentsFormButton color="green" icon="save" type="submit" @clicked="submitTeam">Save
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
            'schools',
            'team'
        ],
        created: function () {

        },
        methods: {
            submit() {
                this.$inertia.post('/schools', {
                    title: document.querySelector("#title").value,
                    description: document.querySelector("#description").value,

                })
            },
            submitTeam() {
                this.$inertia.post('/schools/' + this.team.id + '/store', {
                    title: document.querySelector("#title").value,
                    description: document.querySelector("#description").value,

                })
            },
        }
    }

</script>
