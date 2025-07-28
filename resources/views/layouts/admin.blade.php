<!DOCTYPE html>
<html lang="{{ Auth::user()->settings['language'] ?? str_replace('_', '-', app()->getLocale()) }}"
    data-theme="{{ Auth::user()->settings['theme'] ?? 'light' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel="icon" href="{{ asset('assets/img/site/logo.ico') }}" type="image/x-icon" sizes="48x48">

    @include('compass.index')

    @include('compass.includes.quilljs')

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- ApexCharts CDN -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    @livewireStyles

    @livewireScripts
</head>

<body class="{{ site('background', 'bg-neutral-50 dark:bg-neutral-900') }}">
    @include('partials.sidebar', ['slot' => $slot])
</body>

</html>
