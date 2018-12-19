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
mix.autoload({
    jquery: ['$', 'global.jQuery',"jQuery","global.$","jquery","global.jquery"]
});

mix.js(
		[
			'resources/assets/js/app.js'
		], 'public/js/libraries.js');
mix.styles([
			
   			'resources/assets/sass/app.scss',

   		], 'public/css/libraries.css');
