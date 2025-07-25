<!DOCTYPE html>
<html lang="{{ Auth::user()->settings['language'] ?? str_replace('_', '-', app()->getLocale()) }}"
    data-theme="{{ Auth::user()->settings['theme'] ?? 'light' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel="icon" href="{{asset('assets/img/site/logo.ico')}}" type="image/x-icon" sizes="48x48">

    @include('compass.index')

    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>

    @livewireStyles

    @livewireScripts
</head>

<body class="{{ site('background', 'bg-neutral-50 dark:bg-neutral-900') }} ">
    @if ($header === 1)
        <div
            class="h-[30rem] relative bg-[url({{ asset('assets/img/site/home.webp') }})] bg-cover bg-center mask-b-from-20% mask-b-to-95%  bg-object-cover">
            <div
                class="backdrop-blur-sm h-[100%] w-[100%] bg-linear-to-t from-transparent from-50% to-white/50 dark:to-black/80">
            </div>
        </div>
    @else
        <div
            class="h-[5rem] relative bg-[url({{ asset('assets/img/site/home.webp') }})] bg-cover bg-center mask-b-from-20% mask-b-to-95%  bg-object-cover">
            <div
                class="backdrop-blur-sm h-[100%] w-[100%] bg-linear-to-t from-transparent from-50% to-white/50 dark:to-black/80">
            </div>
        </div>
    @endif

    <main>
        {{ $slot }}
    </main>

    @include('partials.navbar')

    <footer></footer>
</body>

</html>