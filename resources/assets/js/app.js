
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//导入bootstarp.js
require('./bootstrap');

//全局注册vue
window.Vue = require('vue');

//导入vue-router
import VueRouter from 'vue-router';
//导入路由配置
import router from './routes';
//导入公共导航
import NavBar from './components/common/NavbarComponent.vue'
//导入公共尾部
import AppFooter from './components/common/FooterComponent.vue';
//有很多地方共用某个组件的时候使用下面的形式 Vue.component('xxxx','xxxxxx');
//Vue.component('app-footer',require('./components/common/FooterComponent'));

//告诉vue使用vueRouter组件
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el : '#app',
    components : {
        NavBar,
        AppFooter
    },
    router : router
})
