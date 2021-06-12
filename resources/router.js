import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export const router = new VueRouter({
    mode: 'history',
    routes:
        [
            {
                path: '/',
                component: Vue.component('welcome', () => import('./components/Welcome.vue')),
                name: 'welcome',
            },
            {
                path: '/roadmap',
                component: Vue.component('roadmap-index', () => import('./components/Roadmap/index.vue')),
                name: 'roadmap.index',
            },

        ],
    base: '/',
});