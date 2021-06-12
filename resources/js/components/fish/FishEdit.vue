<template>
    
<x-app-layout>
        <Header title="Update Fish">
        </Header>

    <?php echo Form::open(['route' => ['fish.update', ['school' => $school->id, 'fish' => $fish->id]]]) ?>
    @csrf
    @method('PUT')

    <div class="flex flex-col">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ fish.title }}">

        <label for="description">Description (Optional)</label>
        <input type="text" name="description" id="description" value="{{ fish.description }}">

        <label for="url">URL</label>
        <input type="text" name="url" id="url" value="{{ fish.url }}">

        <div class="flex flex-row space-x-1">
            <FormButton href="{{route('fish.index', ['school' => $school->id]) }}" color="red" icon="arrow-left">Cancel</FormButton>
            <FormButton color="green" icon="save" type="submit">Save</FormButton>
        </div>

        <?php echo Form::close(); ?>

    </div>

</x-app-layout>
</template>
<script>
import Header from './../components/Header.vue';
import FormButton from './../components/form/FormButton.vue';
import Label from '../../../../vendor/laravel/breeze/stubs/inertia-vue/resources/js/Components/Label.vue';

    export default {
  components: { Header, Label },
        data() {
            return {
                school: this.school,
                fish: this.fish
            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
