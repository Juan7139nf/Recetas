<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @include('compass.index')
</head>

<body>
    <header>
        <h1>Mi Aplicación</h1>
        @auth
            <p>Bienvenido, {{ Auth::user()->username }}</p>
        @endauth
    </header>
    <main>
        {{ $slot }}
    </main>

    <footer>
        <p>© {{ date('Y') }} Mi App</p>
    </footer>
</body>

</html>