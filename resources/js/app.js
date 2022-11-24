import './bootstrap';
import { createApp } from 'vue';
import App from '../src/App.vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
// importamos axios
import VueAxios from 'vue-axios';
import axios from 'axios';

// importamos router

import router from '../src/router/index';


createApp(App).use(VueAxios, axios).use(router).mount("#app")





