const mix = require('laravel-mix');
require('mix-tailwindcss');
require('laravel-mix-purgecss');
// require('laravel-mix-tailwind');
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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/vendor.js', 'public/js')
    .js('resources/js/utils/app_utils.js', 'public/js')
    .js('resources/js/tinymce.min.js', 'public/js')
    // .js('resources/js/ckeditor.js', 'public/js')
    .js('resources/js/init.js', 'public/js')
    .js('resources/js/activate_sw.js', 'public/js')
    .js('resources/js/hieworks_service_worker.js', 'public')
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/assets', 'public/assets/')
    .tailwind()
    .purgeCss()
    .options({ processCssUrls: false });




    // .options({
    //     processCssUrls:false,
    //     postCss:[tailwind('./tailwind.config.js')]
    // })

    if (mix.inProduction()) {
        mix.version();
    }