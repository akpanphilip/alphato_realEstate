require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from 'vue-router';
import { routes } from "./routes";

Vue.use(VueRouter);

// Vue.component('example-componen', require('./components/ExampleComponent.vue').default);
Vue.component('student-index', require('./components/student/Index.vue').default);

const router = new VueRouter({
    mode : 'history',
    routes : routes
})

const app = new Vue({
    el: '#app',
    router : router
});
