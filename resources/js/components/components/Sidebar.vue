<template>

    <ul class="block sm:w-full mb-2">
        <li class="flex flex-col">
            <NavLink class="pl-9 flex flex-row items-center" :href="`/schools`" :active="checkActive('schools')">
                <i class="fa fa-columns mr-2"></i> My Schools
                <i class="fas fa-chevron-right ml-auto mr-2"></i>
            </NavLink>

            <NavLink class="pl-9 flex flex-row items-center" :href="`/teams`"
                :active="checkActive('teams')">
                <i class="fa fa-columns mr-2"></i> My Teams
                <i class="fas fa-chevron-right ml-auto mr-2"></i>
            </NavLink>

            <NavLink class="pl-9 flex flex-row items-center" :href="`/teams/invitations`"
                :active="checkActive('teams/invitations')">
                <i class="fa fa-columns mr-2"></i> My Invitations
                <i class="fas fa-chevron-right ml-auto mr-2"></i>
            </NavLink>

            <NavLink class="pl-9 flex flex-row items-center" :href="`/schools/marketplace`"
                :active="checkActive('schools/marketplace')">
                <i class="fa fa-columns mr-2"></i> Marketplace
                <i class="fas fa-chevron-right ml-auto mr-2"></i>
            </NavLink>

            <NavLink class="pl-9 flex flex-row items-center" :href="`/schools/downloaded`"
                :active="checkActive('schools/downloaded')">
                <i class="fa fa-columns mr-2"></i> Downloaded Schools
                <i class="fas fa-chevron-right ml-auto mr-2"></i>
            </NavLink>
        </li>
    </ul>
</template>
<script>
    import NavLink from './NavLink.vue';
    export default {
        data() {
            return {

            }
        },
        created() {

        },
        methods: {
            checkActive: function (ev) {
                let path = window.location.pathname;
                return path == ev;

            }
        }
    };

</script>
