import './bootstrap';
import { createApp} from 'vue';
import App from './components/app.vue';
import Registration from '../views/user-page/registration.vue';
import Login from '../views/user-page/login.vue';

if (document.getElementById('app')) {
    createApp(App).mount('#app');
}

if (document.getElementById('registration')) {
    createApp(Registration).mount('#registration');
}

if (document.getElementById('login')) {
    createApp(Login).mount('#login');
}

