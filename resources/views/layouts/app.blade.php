<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website SBM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    @include('partials.navbar')

    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    {{-- @include('partials.footer') --}}

</body>
</html>