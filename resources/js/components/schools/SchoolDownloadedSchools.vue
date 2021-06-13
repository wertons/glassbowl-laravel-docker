<template>
    <x-app-layout>
    <slot name="header">
        <Header title="My downloaded Schools">
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
                <tr v-for="school in schools" :key="school">
                    <td>
                        {{ school.title}}
                    </td>
                    <td>
                        {{school.description}}
                    </td>
                    <td>
                        {{school.created_at}}
                    </td>
                    <td>
                        {{school.user.email}}
                    </td>
                    <td class="actions">
                        <FormActionButton color="red" type="post" class="fa-download" :href="`schools/${school}/cancelDownloadSchool`" />
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
            schools,
        }
    },
    created(){
          axios
                .post(`api/schools/downloadedSchools`,{
                    _token: csrf_token,
                    _method: 'GET',
                },{
                    "Content-Type":"application/x-www-form-urlencoded"
                }).then( (ev) =>{
                    schools = ev.data.schools
                }
                );
    },
    methods:{

    }
};
</script>