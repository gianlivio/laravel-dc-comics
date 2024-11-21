<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- direttive di vite in tutte le pagine che usano questo file -->
    @vite('resources/js/app.js')
</head>

<body>
    <header class="custom-header">
        @include('partials.header')
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer-custom">
        @include('partials.footer')
    </footer>
</body>


</html>
