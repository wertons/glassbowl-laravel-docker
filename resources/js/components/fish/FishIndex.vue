<template>
    

<x-app-layout>
    <x-slot name="header">
        <x-header title="My Fishes">
            <x-form.action-button class="fa-plus" color="green" :href="route('fish.create', ['school' => $school])" />
        </x-header>
    </x-slot>
    <div class="overflow-x-auto">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>URL</th>
                    <th>Created</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="fish in fishes" :key="fish.id">
                    <td>
                        {{ fish.title }}
                    </td>
                    <td>
                        {{ fish.description }}
                    </td>
                    <td>
                        {{ fish.url }}
                    </td>
                    <td>
                        {{ fish.created_at }}
                    </td>

                    <td class="actions">
                        <x-form.action-button color="green" class="fa-edit" :href="route('fish.edit', ['school'=>$school , 'fish' => $fish])" />
                        <x-form.action-button color="red" type="form" class="fa-trash" :href="route('fish.destroy', ['school' => $school, 'fish' => $fish])" />
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</x-app-layout>
</template>
<script>
export default {
    data(){
        return{
            
        }
    },
    created(){
        
    },
    methods:{

    }
};
</script>