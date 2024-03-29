<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('client/assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/project.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/blogs.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/dashboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Site Hoom</title>
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>
<script type="text/javascript" src="{{ asset('client/assets/js/main.js') }}"></script>
</html>
