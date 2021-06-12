import spa from './components/spa.vue';
import SchoolIndex from './components/schools/SchoolIndex.vue';

export const routes = [
    {
        name: 'index',
        path: '/',
        component: spa
    },
    {
        name: 'schools',
        path: '/schools',
        component: SchoolIndex
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditBook
    }
];