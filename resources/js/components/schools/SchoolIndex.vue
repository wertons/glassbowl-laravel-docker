<template>
    <x-app-layout>
        <slot name="header">
            <Header title="My Schools">
                <FormActionButton class="fa-plus" color="green" :href="`/schools/create`" v-if="team == null"/>
                <FormActionButton class="fa-plus" color="green"
                    :href="`/schools/create/${team}`" v-else/>
            </Header>
        </slot>
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

                            <FormActionButton color="green" type="post" class="fa-share"
                                :href="`schools/${school.id}/share`" v-if="school.user_id != null && school.shared == false" />
                            <FormActionButton color="red" type="post" class="fa-share"
                                :href="`schools/${school.id}/unshare`" v-if="school.user_id != null && school.shared != false"/>
            
                            <FormActionButton color="green" class="fa-edit"
                                :href="`/schools/edit/${school.id}`" />
                            <FormActionButton color="yellow" class="fa-fish"
                                :href="`/fish/${school.id}`" />
                            <FormActionButton color="red" type="form" class="fa-trash"
                                :href="`schools/${school.id}`" />
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
            team: $route.params.team ?? false,
        }
    },
    created(){
        if(!team){
                 axios
                .post(`api/schools`,{
                    _token: csrf_token,
                    _method: 'GET',
                },{
                    "Content-Type":"application/x-www-form-urlencoded"
                }).then( (ev) =>{
                    schools = ev.data.schools
                }
                );
        } else{
               axios
                .post(`api/schools/${team}/index`,{
                    _token: csrf_token,
                    _method: 'GET',
                },{
                    "Content-Type":"application/x-www-form-urlencoded"
                }).then( (ev) =>{
                    schools = ev.data.schools
                }
                );
        }
    },
    methods:{

    }
};
</script>