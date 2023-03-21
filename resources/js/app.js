import './bootstrap';
import { createApp } from 'vue';

import TableBook from './components/TableBook.vue';

const app = createApp({
    el: '#app',
    components: {
        'table-book' : TableBook
    }
});

app.mount('#app');