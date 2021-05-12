const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.styles([
    'resources/css/style.css',
    'resources/css/vendor.bundle.base.css',
], 'public/css/style.css')

.scripts([
    'resources/js/vendor.bundle.base.js',
    'resources/js/off-canvas.js',
    'resources/js/misc.js',
    'resources/js/dashboard.js',
    'resources/js/todolist.js',    
], 'public/js/script.js')
.version();
