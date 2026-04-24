<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BasicTo-do')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-amber-50">
    @yield('content')    
</body>
</html>