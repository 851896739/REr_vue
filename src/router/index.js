import Vue from 'vue'
import Router from 'vue-router'
//路由 充当页面切换 或是说a标签的效果
// 引入组件
import homepage from '@/components/pages/homepage/homepage';
import about from '@/components/pages/about';
import policypage from '../components/pages/policy/policypage';
import resumepage from '../components/pages/resume/resumepage'

Vue.use(Router)

export default new Router({
  // mode: 'history', // url中不会出现#号了 放在服务器刷新 404
  routes: [
    {
      path: "/",  //打开页面 默认渲染的
      component: homepage
    },
    {
      path: "/home", // 对应添加在url后的路径，也是router-link的to属性指向
      component: homepage
    },
    {
      path: "/policypage",
      component: policypage
    },
    {
      path: "/resumepage",
      component: resumepage
    },
    {
      path: "/about",
      component: about
    }
  ]
})
