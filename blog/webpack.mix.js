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

// mix.js('resources/js/myjs.js', 'public/js')
//     .vue()
//     .sass('resources/sass/app.scss', 'public/css');
    mix.styles([
        'public/css/mystyle.css'
    ], 'public/css/mystyle.css');

    mix.scripts([
        'public/js/mystyle.js'
    ], 'public/js/mystyle.js');