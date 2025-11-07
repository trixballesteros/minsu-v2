const mix = require('laravel-mix');
const webpack = require('webpack');
const customWebpackConfig = require('./webpack.config');

mix.js('resources/js/app.js', 'public/js').vue()
    .extract([
        'vue',
        'vuex',
        'axios',
        'bootstrap',
        '@inertiajs/inertia',
        '@inertiajs/inertia-vue3',
        '@inertiajs/progress',
        'lodash',
        'sweetalert2',
        'vee-validate',
        'jquery',
    ])
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig({
        ...customWebpackConfig,
        plugins: [
            ...(customWebpackConfig.plugins || []),
            new webpack.DefinePlugin({
                __VUE_OPTIONS_API__: JSON.stringify(true),
                __VUE_PROD_DEVTOOLS__: JSON.stringify(false),
                __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: JSON.stringify(false),
            }),
        ],
    });

if (mix.inProduction()) {
    mix.version();
}
