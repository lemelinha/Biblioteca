<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LibraryHub</title>

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    @yield('header')
    @yield('sidebar')
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>
    @yield('footer')
</body>

</html>