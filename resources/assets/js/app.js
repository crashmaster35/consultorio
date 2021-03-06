
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import Vuetify from 'vuetify'
import VeeValidate from 'vee-validate'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)
Vue.use(VeeValidate)

require('./bootstrap');
//import BootstrapVue from 'bootstrap-vue';

window.Vue = require('vue');

//Vue.use(BootstrapVue);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
//Vue.component('prospect-component', require('./components/prospectComponent.vue'));

const prospectVue = new Vue({
    el: '#prospect-vue',
    data: {

    },
    methods: {

    },
    mounted: function(){
    	
    },
});
