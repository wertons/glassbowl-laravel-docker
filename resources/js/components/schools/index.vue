<template>
    <x-app-layout>
        <x-slot name="header">
            <x-header title="My Schools">
                @if($team == null)
                <x-form.action-button class="fa-plus" color="green" :href="route('schools.create', [])" />
                @else
                <x-form.action-button class="fa-plus" color="green"
                    :href="route('schools.teamCreate', ['team' => $team])" />
                @endif
            </x-header>
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
                            @if($school->user_id != null)
                            @if($school->shared == false)
                            <x-form.action-button color="green" type="post" class="fa-share"
                                :href="route('schools.share', ['school'=>$school])" />
                            @else
                            <x-form.action-button color="red" type="post" class="fa-share"
                                :href="route('schools.unshare', ['school'=>$school])" />
                            @endif
                            @endif
                            <x-form.action-button color="green" class="fa-edit"
                                :href="route('schools.edit', ['school'=>$school])" />
                            <x-form.action-button color="yellow" class="fa-fish"
                                :href="route('fish.index', ['school'=>$school])" />
                            <x-form.action-button color="red" type="form" class="fa-trash"
                                :href="route('schools.destroy', ['school'=>$school])" />
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </x-app-layout>
</template>
<script>
</script>