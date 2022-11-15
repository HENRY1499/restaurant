import './bootstrap';
import { createApp } from "vue";
import router from '../src/router/index';
import App from '../src/App.vue';

// ORUGA
// import Oruga from '@oruga-ui/oruga-next'
// import '@oruga-ui/oruga-next/dist/oruga.css'



createApp(App).use(router).mount("#app")