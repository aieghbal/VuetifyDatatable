require('./bootstrap');
import { createApp } from 'vue';
import DataTable from './components/DataTable.vue';

const app = createApp({});
app.component('data-table', DataTable);
app.mount('#app');
