<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="My Schools">
                <x-form.action-button class="fa-plus" color="green" :href="'/schools/create'"  v-if="team == null"/>
                <x-form.action-button class="fa-plus" color="green"
                    :href="'schools/'+team.id+'/create'"  v-else/>
            </ComponentsHeader>
        </template>
        <div class="overflow-x-auto">
            <table>
                <thead class="table-fixed">
                    <tr>
                        <th class="w-3/8">Title</th>
                        <th class="w-2/8">Description</th>
                        <th class="w-1/8">Created</th>
                        <th class="w-1/4 actions">Actions</th>
                        <th class="w-1/8"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" class="marketplace-searcher" name="title"
                                placeholder="Filter by title..."> </td>
                        <td>
                            <input type="text" class="marketplace-searcher" name="description"
                                placeholder="Filter by description..."> </td>
                        <td>
                            <input type="text" class="marketplace-searcher" name="created"
                                placeholder="Filter by date..."> </td>
                        <td>
                        <td class="actions">
                        </td>
                    </tr>
                    <tr v-for="school in schools" :key="school">
                        <td class="searchable-title searchable">
                            {{$school->title}}
                        </td>
                        <td class="searchable-description searchable">
                            {{$school->description}}
                        </td>
                        <td class="searchable-created searchable">
                            {{$school->created_at}}
                        </td>
                        <td class="actions">
                            <x-form.action-button tooltip="Fishes" color="yellow" class="fa-fish"
                                :href="route('fish.index', ['school'=>$school])" />
                            @if($school->user_id != null)
                            @if($school->shared == false)
                            <x-form.action-button tooltip="Share" color="green" type="post" class="fa-share"
                                :href="route('schools.share', ['school'=>$school])" />
                            @else
                            <x-form.action-button tooltip="Unshare" color="red" type="post" class="fa-share"
                                :href="route('schools.unshare', ['school'=>$school])" />
                            @endif
                            @endif
                            <x-form.action-button tooltip="Edit" color="green" class="fa-edit"
                                :href="route('schools.edit', ['school'=>$school])" />
                            <x-form.action-button tooltip="Delete" color="red" type="form" class="fa-trash"
                                :href="route('schools.destroy', ['school'=>$school])" />
                        </td>
                        <td></td>
                    </tr>
                </tbody>

            </table>
        </div>

    </LayoutsApp>
</template>
<script>
    import LayoutsApp from './LayoutsApp.vue';
    import ComponentsHeader from './ComponentsHeader.vue';

    export default {
        components:{
           LayoutsApp,
           ComponentsHeader
        },
        props:[
            'schools',
            'team'
        ],
        created: function () {
            document.querySelectorAll(".marketplace-searcher").forEach(input => {
                input.addEventListener("change", (ev) => {

                    let text = ev.target.value;
                    document.querySelectorAll(".searchable-" + ev.target.name).forEach(row => {
                        if (!row.innerHTML.includes(text.trim())) {
                            row.parentElement.classList.add("hidden");
                        } else {
                            row.parentElement.classList.remove("hidden");

                        }
                    });
                });
            });
        }
    }

</script>
