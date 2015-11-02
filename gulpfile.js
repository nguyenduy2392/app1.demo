var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {

    //==============================================styles: less -> css
    mix.less([
        'app.less'
    ]);

    //==========================================================scripts
    //combine vendor scripts
    mix.scripts([
        "public/bower_components/jquery/dist/jquery.min.js",
        "public/bower_components/jquery-ui/jquery-ui.min.js",
        "public/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js",
        "public/bower_components/masonry/dist/masonry.pkgd.min.js",
        "public/bower_components/angular/angular.js"

    ], 'public/js/vendor.js', 'public');

    //combine main scripts
    mix.scriptsIn("public/js/main",  'public/js/main.js');

    //combine services scripts
     mix.scriptsIn("public/js/services", 'public/js/services.js');

    //combine view scripts
    mix.scriptsIn("public/js/view",  'public/js/view.js');

    // mix.version([
    //       'public/css/app.css',
    //       'public/js/vendor.js',
    //       'public/js/app.js'
    //]);
    
    mix.styles([
        // "public/bower_components/jquery-colorbox/example3/colorbox.css",
        "public/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"
    ], 'public/css/vendor.css', 'public');

    
});