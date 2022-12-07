const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])


    .styles('resources/client/assets/css/global.css', 'public/client/assets/css/global.css')
    .styles('resources/client/assets/css/home.css', 'public/client/assets/css/home.css')
    .styles('resources/client/assets/css/login.css', 'public/client/assets/css/login.css')
    .styles('resources/client/assets/css/register.css', 'public/client/assets/css/register.css')
    .styles('resources/client/assets/css/projects.css', 'public/client/assets/css/projects.css')
    .styles('resources/client/assets/css/project.css', 'public/client/assets/css/project.css')
    .styles('resources/client/assets/css/dashboard.css', 'public/client/assets/css/dashboard.css')
    .styles('resources/client/assets/css/blogs.css', 'public/client/assets/css/blogs.css')
    .styles('resources/client/assets/css/blog.css', 'public/client/assets/css/blog.css')
