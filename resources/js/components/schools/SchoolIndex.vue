<template>
    <x-app-layout>
        <x-slot name="header">
            <Header title="My Schools">
                <ActionButton class="fa-plus" color="green" :href="route('schools.create', [])" v-if="team == null"/>
                <ActionButton class="fa-plus" color="green"
                    :href="route('schools.teamCreate', ['team' => $team])" v-else/>
            </Header>
        </x-slot>
        <div class="overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="school in schools" :key="school.id">
                        <td>
                            {{ school.title }}
                        </td>
                        <td>
                            {{ school.description }}
                        </td>
                        <td>
                            {{ school.created_at }}
                        </td>
                        <td class="actions">

                            <ActionButton color="green" type="post" class="fa-share"
                                :href="route('schools.share', ['school'=>$school])" v-if="school.user_id != null && school.shared == false" />
                            <ActionButton color="red" type="post" class="fa-share"
                                :href="route('schools.unshare', ['school'=>$school])" v-if="school.user_id != null && school.shared != false"/>
            
                            <ActionButton color="green" class="fa-edit"
                                :href="route('schools.edit', ['school'=>$school])" />
                            <ActionButton color="yellow" class="fa-fish"
                                :href="route('fish.index', ['school'=>$school])" />
                            <ActionButton color="red" type="form" class="fa-trash"
                                :href="route('schools.destroy', ['school'=>$school])" />
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </x-app-layout>
</template>
<script>
import Header from './../components/Header.vue';
import FormActionButton from './../components/form/FormActionButton.vue';
export default {
    data(){
        return{
            schools: this.schools
        }
    },
    created(){
        
    },
    methods:{

    }
};
</script>