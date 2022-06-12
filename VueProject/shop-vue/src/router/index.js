import { createRouter, createWebHashHistory } from 'vue-router'


const routes = [
  
  {
    path: '/',
    name: 'some',
    component: function () {
      return import(/* webpackChunkName: "about" */ '../views/main/Index.vue')
    }
  },
  {
    path: '/products',
    name: 'index',
    component: function () {
      return import(/* webpackChunkName: "about" */ '../views/products/Index.vue')
    }
  }
  
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
