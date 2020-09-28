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

mix.webpackConfig({
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "resources/_dist/admin/js/src"),
            "@assets": path.resolve(__dirname, "resources/_dist/admin/resources/assets"),
            "@store": path.resolve(__dirname, "resources/_dist/admin/resources/js/src/store"),
            "@plugins": path.resolve(
                __dirname,
                "resources/_dist/admin/resources/js/src/utilities/plugins"
            ),
            "@views": path.resolve(__dirname, "resources/_dist/admin/resources/js/src/Pages"),
            "@components": path.resolve(
                __dirname,
                "resources/_dist/admin/resources/js/src/components"
            ),
            "@sass": path.resolve(__dirname, "resources/_dist/admin/resources/sass")
        }
    },
    output: {
        chunkFilename: "_dist/admin/js/chunks/[name].[chunkhash].js"
    }
});

mix.js('resources/_dist/admin/js/app.js', 'public/_dist/admin/js')
    .sass('resources/_dist/admin/sass/bootstrap.scss', 'public/_dist/admin/app-assets/css/bootstrap.css')
    .sass('resources/_dist/admin/sass/bootstrap-extended.scss', 'public/_dist/admin/app-assets/css/bootstrap-extended.css')
    .sass('resources/_dist/admin/sass/colors.scss', 'public/_dist/admin/app-assets/css/colors.css')
    .sass('resources/_dist/admin/sass/components.scss', 'public/_dist/admin/app-assets/css/components.css')
    .sass('resources/_dist/admin/sass/themes/dark-layout.scss', 'public/_dist/admin/app-assets/css/themes/dark-layout.css')
    .sass('resources/_dist/admin/sass/themes/semi-dark-layout.scss', 'public/_dist/admin/app-assets/css/themes/semi-dark-layout.css')
    .sass('resources/_dist/admin/sass/core/menu/menu-types/vertical-menu.scss', 'public/_dist/admin/app-assets/css/core/menu/menu-types/vertical-menu.css')
    .sass('resources/_dist/admin/sass/core/colors/palette-gradient.scss', 'public/_dist/admin/app-assets/css/core/colors/palette-gradient.css')
    .sass('resources/_dist/admin/sass/pages/authentication.scss', 'public/_dist/admin/app-assets/css/pages/authentication.css')
    .sass('resources/_dist/admin/sass/app.scss', 'public/_dist/admin/css');
//     .copy('resources/_dist/admin/assets/css/iconfont.css', 'public/_dist/admin/css/iconfont.css')
//     .copyDirectory('resources/_dist/admin/assets/fonts', 'public/_dist/admin/fonts') ;

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
