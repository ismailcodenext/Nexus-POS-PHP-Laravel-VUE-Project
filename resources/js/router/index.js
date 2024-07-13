import {createRouter, createWebHistory } from "vue-router";
import Login from "../components/auth/Login.vue";
import Dashboard from '../admin/Dashboard.vue';
import Registration from "../components/auth/Registration.vue";
import Modal from "../admin/page/model.vue";


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
    {
      path: '/modal',
      name: 'modal',
      component: Modal,
      meta: {
        title: 'Modal',
      },
    },
  ];

  

  const router = createRouter({
    history: createWebHistory(),
    routes,
  });

  export default router;
