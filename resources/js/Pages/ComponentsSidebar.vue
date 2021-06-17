<template>
    <ul class="block sm:w-full mb-2">
    <li class="flex flex-col">
        <div class="block w-full px-1 text-sm font-medium leading-5 pl-5 py-2 unselectable">
            <i class=" fa fa-layer-group mr-2"></i> Schools
        </div>
        <ComponentsNavLink class="pl-9 flex flex-row items-center" :href="'/schools'" >
            <i class="fa fa-layer-group mr-2"></i> My Schools
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </ComponentsNavLink>

        <ComponentsNavLink class="pl-9 flex flex-row items-center" :href="'/schools/marketplace'" >
            <i class="fa fa-store mr-2"></i> Aquarium
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </ComponentsNavLink>

        <ComponentsNavLink class="pl-9 flex flex-row items-center" :href="'/schools/downloadedSchools'" >
            <i class="fa fa-download mr-2"></i> Downloaded Schools
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </ComponentsNavLink>

        <div class="block w-full px-1 text-sm font-medium leading-5 pl-5 py-2 unselectable">
            <i class=" fa fa-users mr-2"></i> Teams
        </div>

        <ComponentsNavLink class="pl-9 flex flex-row items-center" :href="'/teams'" >
            <i class="fa fa-users mr-2"></i> My Teams
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </ComponentsNavLink>

        <ComponentsNavLink class="pl-9 flex flex-row items-center" :href="'/teams/invitations'">
            <i class="fa fa-envelope mr-2"></i> My Invitations
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </ComponentsNavLink>
    </li>
</ul>
</template>
<script>
import ComponentsNavLink from './ComponentsNavLink.vue';
export default {
    components:{
        ComponentsNavLink
    }
}
</script>