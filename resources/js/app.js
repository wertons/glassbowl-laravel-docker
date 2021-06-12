require('./bootstrap');
require('alpinejs')
import Cookies from 'js-cookie';

window.toggleDrawer = (openDrawer) => {
    const newState = !openDrawer;
    Cookies.set('drawerOpen', newState, { expires: 7, path: '/' });
    return newState;
  };

window.Cookies = Cookies;

window.Vue = require('vue');
Vue.component('schools-index',require('./components/schools/index.vue').default);

const app = new Vue({
  el: '#app'
});