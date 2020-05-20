const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Cada módulo possui seu próprio contexto, de forma que a compilação de 
 | assets deve ser efetuada de forma independete do projeto principal do Laravel.
 |
 */

mix.js('src/Resources/js/module.js', 'src/Assets/js')
    .sass('src/Resources/sass/module.scss', 'src/Assets/css');
