<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @include('compass.index')

    <link rel="icon" href="{{ asset('assets/img/site/logo.ico') }}" type="image/x-icon" sizes="48x48">

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    @livewireStyles

    @livewireScripts

    <script>
        const savedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const theme = savedTheme || (systemPrefersDark ? 'dark' : 'light');

        console.log('Tema aplicado:', theme);

        document.documentElement.setAttribute('data-theme', theme);

        if (theme === 'dark') {
            $('.light-icon').addClass('hidden');
            $('.dark-icon').removeClass('hidden');
        } else {
            $('.dark-icon').addClass('hidden');
            $('.light-icon').removeClass('hidden');
        }
    </script>
</head>

<body class="{{ site('background', 'bg-neutral-50 dark:bg-neutral-900') }}">
    <main class="relative h-screen w-screen overflow-hidden">
        <div
            class="h-screen relative bg-[url({{ asset('assets/img/site/login.webp') }})] bg-cover bg-center  bg-object-cover">
            <div
                class="backdrop-blur-sm h-full w-full bg-linear-to-tr from-transparent from-30% to-white/50 dark:to-black/90">
            </div>
        </div>
        <div class="absolute inset-0 z-10 overflow-y-auto">
            {{ $slot }}
        </div>
    </main>
</body>

</html>