<template>
    
<x-app-layout>
    <slot name="header">
        <Header title="Update Fish">
        </Header>
    </slot>

    <div class="flex flex-col">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" :value=" fish.title " v-model="title">

        <label for="description">Description (Optional)</label>
        <input type="text" name="description" id="description" :value=" fish.description " v-model="description">

        <label for="url">URL</label>
        <input type="text" name="url" id="url" :value=" fish.url " v-model="url">

        <div class="flex flex-row space-x-1">
            <FormButton color="red" icon="arrow-left">Cancel</FormButton>
            <FormButton color="green" icon="save" type="submit" @click="updateFish()">Save</FormButton>
        </div>

    </div>

</x-app-layout>
</template>
<script>
import Header from './../components/Header.vue';
import FormButton from './../components/form/FormButton.vue';
import Label from './../components/Label.vue';

    export default {
  components: { Header, Label },
        data() {
            return {
                school: this.school,
                fish: this.fish,
                title,
                description,
                url
            }
        },
        created() {

        },
        methods: {
            updateFish: function (ev) {
                axios
                .post(`api/fish/${school}/${fish}`,{
                    _token: csrf_token,
                    _method: 'PUT',
                    title,
                    description,
                    url
                },{
                    "Content-Type":"application/x-www-form-urlencoded"
                }).then(
                    $router.go(-1)
                );
            },
        }
    };

</script>
