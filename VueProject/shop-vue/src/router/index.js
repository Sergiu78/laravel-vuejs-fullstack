import { createRouter, createWebHashHistory } from 'vue-router'


const routes = [
  
  {
    path: '/',
    name: 'Some',
    component: function () {
      return import(/* webpackChunkName: "about" */ '../views/Some.vue')
    }
  },
  {
    path: '/else',
    name: 'Else',
    component: function () {
      return import(/* webpackChunkName: "about" */ '../views/Else.vue')
    }
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
