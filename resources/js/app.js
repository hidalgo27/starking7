// require('./bootstrap');
// require('alpinejs');
// import owl from 'owl.carousel/dist/owl.carousel'
// require('owl.carousel/dist/owl.carousel');
// require('/resources/js/library/product.thumbnail.slider');
// require('vendor/semantic/semantic.min');
// require('library/jquery.countdown.min');
// require('library/custom');
// require('library/offset_overlay');
// require('library/night-mode');
// require('vendor/OwlCarousel');
// import Element from 'element-ui';

import { createApp } from 'vue'
import ExampleComponent from "./components/ExampleComponent";
const app = createApp({
    components: {
        ExampleComponent
    }
})
app.mount('#app')
