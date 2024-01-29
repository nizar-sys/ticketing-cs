const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .js(
        "resources/js/admin/master_data/permissions/script.js",
        "public/js/admin/master_data/permissions/script.js"
    )
    .js(
        "resources/js/admin/master_data/permissions/validation_form_permssion_script.js",
        "public/js/admin/master_data/permissions/validation_form_permssion_script.js"
    )
    .js(
        "resources/js/global/auth/script.js",
        "public/js/global/auth/script.js"
    )
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss"),
        require("autoprefixer"),
    ]);
