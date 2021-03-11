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


 mix.postCss('resources/css/app.css', 'assets/css/app.css', [
     require('tailwindcss'),
     require('postcss-nested')
 ])
 .options({
     processCssUrls: false
 }).js('resources/js/app.js', 'assets/js/app.js');
