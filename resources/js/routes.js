import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueRouter)

require('./bootstrap');
window.Vue = require('vue');

import App from './components/App'
import Welcome from './components/Welcome'
import Blogpost from './components/Page'


Vue.use(VueAxios, axios)
window.axios = require('axios');

const posts = {
    template: `<div>cool {{ $route.params.id }} </div>`
  }

const router = new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'welcome',
            component: Welcome,
            active: false
        },
        { 
            path: '/post/:id', 
            name: 'post', component: 
            Blogpost, 
            props: true 
        },
        { 
            path: '/posts', 
            name: 'posts', 
            component:  posts, 
            props: true 
        }

    ],
})

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});