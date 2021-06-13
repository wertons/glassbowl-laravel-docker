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
                component: Vue.component('TeamIndex', () => import('./components/team/TeamIndex.vue')),
                name: 'team.index',
            },

        ],
    base: '/',
});