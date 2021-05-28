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

mix.js(['resources/js/app.js','resources/js/animated.js','resources/js/script.js','resources/js/plugins.js'], 'public/js')
   .js(['resources/js/bootstrap.min.js','resources/js/jquery.min.js','resources/js/popper.min.js'], 'public/js/app.min.js')
   .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    })
    .sass('resources/sass/app.scss', 'public/css')
    .styles(['resources/css/style.css','resources/css/responsive.css','resources/css/animate.css','resources/css/animated-headline.css','resources/css/font-icons.css','resources/css/magnific-popup.css'], 'public/css/app.css')
    .styles(['resources/css/bootstrap.min.css','resources/css/font-awesome.min.css','resources/css/owl.carousel.min.css'], 'public/css/app.min.css')
    .sourceMaps();
