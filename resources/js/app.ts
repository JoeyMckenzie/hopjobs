import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { componentResolver, titleResolver } from './resolvers';

createInertiaApp({
    title: titleResolver,
    resolve: componentResolver,
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
})
    .then(() => console.log('inertia successfully initialized!'))
    .catch(console.error);
