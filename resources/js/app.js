require('./bootstrap');
require('alpinejs')
import Cookies from 'js-cookie';
import Vue from 'vue'

window.toggleDrawer = (openDrawer) => {
    const newState = !openDrawer;
    Cookies.set('drawerOpen', newState, { expires: 7, path: '/' });
    return newState;
  };

window.Cookies = Cookies;

import { createInertiaApp } from '@inertiajs/inertia-vue'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, app, props }) {
    new Vue({
      render: h => h(app, props),
    }).$mount(el)
  },
})