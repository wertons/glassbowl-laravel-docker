<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="Create new Fish">
            </ComponentsHeader>
        </template>

        <?php echo Form::open(['route' => ['fish.store', 'school' => $school->id]]) ?>
        @csrf
        @method('POST')

        <div class="flex flex-col">
            <label for="title">Title</label>
            <input name="title" type="text" id="title">
            <label for="description">Description (Optional)</label>
            <input name="description" type="text" id="description">
            <label for="url">URL</label>
            <input name="url" type="text" id="url">

            <div class="flex flex-row space-x-1 mt-4">
                <ComponentsFormButton :href="`/fish/${school.id}`" color="red" icon="arrow-left">
                   Cancel
                   </ComponentsFormButton>
                <ComponentsFormButton color="green" icon="save" type="submit" @clicked="submit">Save</ComponentsFormButton>
            </div>

            <?php echo Form::close(); ?>

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
                this.$inertia.post('/fish'+school.id, {
                    title: document.querySelector("#title").value,
                    description: document.querySelector("#description").value,

                })
            },
        
        }
    }

</script>
