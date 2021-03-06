import Vue from "vue";
import VueRouter from "vue-router";

// 引入组件
import home from '@/components/pages/home';
import about from '@/components/pages/about';

// 要告诉 vue 使用 vueRouter
Vue.use(VueRouter);

const routes = [
    {
        path: "/home",
        component: home
    },
    {
        path: "/about",
        component: about
    }
]

var router = new VueRouter({
    routes
})
export default router;