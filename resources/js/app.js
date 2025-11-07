require('./bootstrap');
// Import Style
import "element-plus/theme-chalk/index.css";
import "vue-toastification/dist/index.css";

// Import modules...
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

// ARGON TEMPLATE
import ArgonDashboard from '@/Argon/plugins/argon-dashboard'
import Toast from "vue-toastification";
// Vuex
import store from '@/Store'
// Directives
import permission from '@/Directives/permission'
import role from '@/Directives/role'

import flatPicker from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";


// Declaration
const options = { containerClassName: "ct-notification" };
const el = document.getElementById('app');

// VUE mount
createApp({
    render: () =>
        h(InertiaApp, {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: (name) => require(`./Pages/${name}`).default,
        }),
})
    .mixin({ methods: { route } })
    .mixin(permission)
    .mixin(role)
    .use(InertiaPlugin)
    .use(ArgonDashboard)
    .use(Toast, options)
    .use(flatPicker)
    .use(store)
    .mount(el);

InertiaProgress.init({ color: '#4B5563' });
