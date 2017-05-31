import Vue from 'vue'
import App from './App.vue'
import Mint from 'mint-ui'
import 'mint-ui/lib/style.css'
import VueRouter from 'vue-router'

import VueResource from 'vue-resource'
import {InfiniteScroll} from 'mint-ui';

Vue.use(Mint)
Vue.use(VueRouter)
Vue.use(VueResource);
Vue.use(InfiniteScroll);

import music from './component/music.vue'
import play from './component/play.vue'

import my from './component/my.vue'
import login from './component/login.vue';
import register from './component/register.vue';

import img from './component/img.vue'

import home from './component/home.vue'
import list from './component/list.vue'

import video from './component/video.vue'

var route=[
	{path:'/video',component:video},
	{path:'/my',component:my},
    {path:'/login',component:login},
    {path:'/register',component:register},
	{path:'/img',component:img},

    {path:'/home',component:home},
    {path:"/list/:id",component:list},

    {path:'/music',component:music},
    {path: '/play/:id', component: play},
    {path:'*',component:home}
//	{path:'*',redirect:'/read'}
]


var router=new VueRouter({
	routes:route
})




new Vue({
  el: '#app',
  router:router,
  render: h => h(App)
})
