import './bootstrap';

import 'bootstrap/dist/css/bootstrap.min.css'
import 'jquery/dist/jquery.min.js'
import 'popper.js/dist/popper.min.js'
import 'bootstrap/dist/js/bootstrap.min.js'

import { createApp } from 'vue'

import app from './components/app.vue'

import router  from './router'

createApp(app).use(router).mount("#app")


