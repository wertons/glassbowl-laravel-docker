require('./bootstrap');
require('alpinejs')
window.Vue = require('vue');

import Cookies from 'js-cookie';
import Vue from 'vue';
import Vuetify from 'vuetify';

import {routes} from './routes.js';

import App from './components/spa.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';

window.toggleDrawer = (openDrawer) => {
    const newState = !openDrawer;
    Cookies.set('drawerOpen', newState, { expires: 7, path: '/' });
    return newState;
  };

window.Cookies = Cookies;

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

const app = new Vue({
  el: '#app',
  router: router,
  render: h => h(App),
});