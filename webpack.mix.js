let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/assets/js')
   .js('resources/assets/js/parsley.min.js' , 'public/assets/js')
   .copy('resources/assets/js/select2.full.js' , 'public/assets/js/select2.full.js')
   .sass('resources/assets/sass/app.scss', 'public/assets/css')
   .styles([
    'resources/assets/css/parsley.css'    
    ], 'public/assets/css/parsley.css')
   .styles([
    'resources/assets/css/select2.min.css'    
    ], 'public/assets/css/select2.min.css')
   .version()
   .browserSync('http://localhost:8000');