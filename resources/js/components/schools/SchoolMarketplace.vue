<template>
    
<x-app-layout>
    <slot name="header">
        <Header title="Marketplace">
        </Header>
    </slot>
    <div class="overflow-x-auto">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created</th>
                    <th>Owner</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="school in schools" :key="school.id">
                    <td>
                        {{ school.title }}
                    </td>
                    <td>
                        {{ school.description}}
                    </td>
                    <td>
                        {{school.created_at}}
                    </td>
                    <td>
                        {{school.user.email}}
                    </td>
                    <td class="actions">
                        <FormActionButton color="green" type="post" class="fa-download" 
                        :href="`schools/${school.id}/getSchool`" />
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
            schools: this.schools,
            team: this.team
        }
    },
    created(){
        
    },
    methods:{

    }
};
</script>