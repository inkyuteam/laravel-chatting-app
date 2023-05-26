import "./bootstrap";
import {createApp} from "vue";

import App from "@/chat/components/App";

const app = createApp({});
app.component('app', App);
app.mount('#app');
