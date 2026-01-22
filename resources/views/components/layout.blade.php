<!doctype html>
<html lang="{{ str_replace('_', "-", app()->getLocale())  }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{ $title ?? 'Главная страница' }}</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="header">
    <div>
        <p>logo</p>
    </div>
    <nav class="header__nav">
        <a href="{{ route('home')  }}">Главная</a>
        <a href="{{ route('showArray')  }}">Массив</a>
    </nav>
</header>
<main class="main">
    {{ $slot }}
</main>
<footer class="footer">
    © 2026 Волкова Алёна, ПИ-312з
</footer>
</body>
</html>
