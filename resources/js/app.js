require('./bootstrap');
require('alpinejs')
window.Vue = require('vue');

import Cookies from 'js-cookie';
import Vue from 'vue';
import Vuetify from 'vuetify';

import {routes} from './routes';

import App from './components/spa.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';

window.toggleDrawer = (openDrawer) => {
    const newState = !openDrawer;
    Cookies.set('drawerOpen', newState, { expires: 7, path: '/' });
    return newState;
  };

window.Cookies = Cookies;

Vue.component('SchoolIndex',require('./components/schools/SchoolIndex.vue').default);

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

const app = new Vue({
  el: '#app',
  router: router,
  render: h => h(App),
});