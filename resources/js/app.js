import './bootstrap';
import { createApp } from "vue";
import axios from 'axios';
import App from './components/app.vue';
import Router from './router/index'

axios.defaults.withCredentials = true;

createApp(App).use(Router).mount("#app");
