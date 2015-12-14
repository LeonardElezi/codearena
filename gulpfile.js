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

elixir(function(mix) {
    mix.less('app.less');
    mix.copy('bower_components/bootstrap/dist/fonts', 'public/assets/fonts');
   	mix.copy('bower_components/font-awesome/fonts', 'public/assets/fonts');
    mix.copy('bower_components/bootstrap-tokenfield/dist/bootstrap-tokenfield.js', 'public/assets/scripts/bootstrap-tokenfield.js');
    mix.copy('bower_components/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js', 'public/assets/scripts/canvas-to-blob.min.js');
    mix.copy('bower_components/bootstrap-fileinput/js/fileinput.min.js', 'public/assets/scripts/fileinput.min.js');
    mix.copy('resources/js/updateprofile.js', 'public/assets/scripts/updateprofile.js');
    mix.copy('resources/js/avatar.js', 'public/assets/scripts/avatar.js');
    mix.styles([
        'bower_components/bootstrap/dist/css/bootstrap.css',
        'bower_components/fontawesome/css/font-awesome.css',
        'bower_components/jquery-ui/themes/smoothness/jquery-ui.css',
        'bower_components/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.css',
        'bower_components/bootstrap-fileinput/css/fileinput.min.css',
        'resources/css/sb-admin-2.css',
        'resources/css/timeline.css',
    ], 'public/assets/stylesheets/styles.css', './');
    mix.scripts([
        'bower_components/jquery/dist/jquery.js',
        'bower_components/jquery-ui/jquery-ui.js',
        'bower_components/bootstrap/dist/js/bootstrap.js',
        'bower_components/Chart.js/Chart.js',
        'bower_components/metisMenu/dist/metisMenu.js',
        'resources/js/soundmanager2.js',
        'resources/js/sb-admin-2.js',
        'resources/js/frontend.js',
    ], 'public/assets/scripts/frontend.js', './');
});


