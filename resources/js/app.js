import './bootstrap';

import Alpine from 'alpinejs';

import  { createApp } from "vue";
import router from './router'
import CompaniesIndex from './components/companies/CompaniesIndex'

createApp( {
    components: {
        components: {
            CompaniesIndex
        }
    }
}).use(router).mount('#app');

window.Alpine = Alpine;

Alpine.start();
