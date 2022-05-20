let source = 'public/app/src/'
let build = 'public/app/build/'

const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
.js('public/app/app.js', build)
.js(source + 'api.js', build)
.js(source + 'auth.js', build)
;
