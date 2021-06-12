<template>
    
<ul class="block sm:w-full mb-2">
    <li class="flex flex-col">
        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('schools.index')" :active="request()->routeIs('schools.index')">
            <i class="fa fa-columns mr-2"></i> My Schools
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>

        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('teams.index')" :active="request()->routeIs('teams.index')">
            <i class="fa fa-columns mr-2"></i> My Teams
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>

        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('teams.invitations')" :active="request()->routeIs('teams.invitations')">
            <i class="fa fa-columns mr-2"></i> My Invitations
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>

        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('schools.marketplace')" :active="request()->routeIs('schools.marketplace')">
            <i class="fa fa-columns mr-2"></i> Marketplace
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>

        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('schools.downloadedSchools')" :active="request()->routeIs('schools.downloadedSchools')">
            <i class="fa fa-columns mr-2"></i> Downloaded Schools
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>
    </li>
</ul>
</template>
<script>
    export default {
        data() {
            return {

            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
