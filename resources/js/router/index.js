import {createRouter, createWebHistory } from "vue-router";
import Login from "../components/auth/Login.vue";
import Dashboard from '../admin/Dashboard.vue';
import Registration from "../components/auth/Registration.vue";


const routes = [
    {
        path: '/',
        name: 'login',
        component: Registration,
        meta: {
          title: 'User Registration',
        },
      },
    {
      path: '/registration',
      name: 'registration',
      component: Registration,
      meta: {
        title: 'User ',
      },
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: Dashboard,
      meta: {
        title: 'Dashboard',
      },
    },
  ];

  const router = createRouter({
    history: createWebHistory(),
    routes,
  });

  export default router;
