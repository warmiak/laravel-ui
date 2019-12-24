<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background: #f5f5f5" class="h-full">

<div id="app" class="flex flex-col min-h-full h-full">

        <header class="flex flex-col">
            @include('layouts.partials.adminNav')
        </header>

        <main class="flex flex-col flex-1">
            <div class="flex flex-row flex-1">
                <aside class="my-4 p-4 rounded-r-lg bg-white shadow-md">
                    @include('layouts.partials.sideNav')
                </aside>
                <section class="flex flex-col w-full m-4 mr-0 rounded-l-lg bg-white shadow-md">
                    <div class="p-4">
                        @yield('content')
                    </div>
                </section>
            </div>
        </main>

        <footer class="flex flex-col">
            @include('layouts.partials.adminFooter')
        </footer>

</div>

</body>
</html>
