<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @include('compass.index')

    <link rel="icon" href="{{asset('assets/img/site/logo.ico')}}" type="image/x-icon" sizes="48x48">
</head>

<body class="{{ site('background', 'bg-neutral-50 dark:bg-neutral-900') }}">
    <main>
        <div class="max-w-[40rem] mx-auto p-8">
            {!! str_replace(
    [':title', ':img'],
    [__('site.title'), asset('assets/img/site/logo_100.webp')],
    site('logo.lg')
) !!}

            {{ $slot }}

        </div>
    </main>
</body>

</html>