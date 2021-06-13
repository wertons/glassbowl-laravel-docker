import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export const router = new VueRouter({
    mode: 'history',
    routes:
        [
            {
                path: '/',
                component: Vue.component('spa', () => import('./components/spa.vue')),
                name: 'Home',
            },
            {
                path: '/schools',
                alias:'/schools/:team',
                component: Vue.component('SchoolIndex', () => import('./components/schools/SchoolIndex.vue')),
                name: 'school.index',
            },
            {
                path: '/schools/create',
                alias:'/schools/create/:team',
                component: Vue.component('SchoolCreate', () => import('./components/schools/SchoolCreate.vue')),
                name: 'school.create',
            },
            {
                path: '/schools/edit/:school',
                component: Vue.component('SchoolEdit', () => import('./components/schools/SchoolEdit.vue')),
                name: 'school.edit',
            },
            {
                path: '/schools/downloaded',
                component: Vue.component('SchoolDownloadedSchools', () => import('./components/schools/SchoolDownloadedSchools.vue')),
                name: 'school.downloaded',
            },
            {
                path: '/fish/:school',
                component: Vue.component('FishIndex', () => import('./components/fish/FishIndex.vue')),
                name: 'fish.index',
            },
            {
                path: '/teams',
                component: Vue.component('TeamIndex', () => import('./components/teams/TeamIndex.vue')),
                name: 'team.index',
            },
            {
                path: '/teams/create',
                component: Vue.component('TeamCreate', () => import('./components/teams/TeamCreate.vue')),
                name: 'team.create',
            },
            {
                path: '/teams/edit/:team',
                component: Vue.component('TeamEdit', () => import('./components/teams/TeamEdit.vue')),
                name: 'team.edit',
            },
            {
                path: '/teams/invitations',
                component: Vue.component('TeamInvitations', () => import('./components/teams/TeamInvitations.vue')),
                name: 'team.invitations',
            },
            {
                path: '/teams/:team/members',
                component: Vue.component('TeamMembers', () => import('./components/teams/TeamMembers.vue')),
                name: 'team.members',
            },
            {
                path: '/teams/:team/invite',
                component: Vue.component('TeamInvite', () => import('./components/teams/TeamInvite.vue')),
                name: 'team.invite',
            },

        ],
    base: '/',
});