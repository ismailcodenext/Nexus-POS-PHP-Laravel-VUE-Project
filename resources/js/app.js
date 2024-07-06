import './bootstrap';
import { createApp } from "vue";
import App from './components/app.vue';
import Router from './router/index'

createApp(App)
    .use(Router)
    .mount("#app");
