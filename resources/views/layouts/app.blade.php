<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Reservio') }}</title>

    <!-- Fonts -->
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body class="antialiased" style="font-family: 'Poppins', sans-serif;">
    <div class="min-h-screen max-w-screen-2xl 2xl:mx-auto">

        {{-- navbar --}}
        @livewire('navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

    </div>

    {{-- page header --}}
    @include('livewire.pages.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Livewire Styles -->
    @livewireScripts
</body>

</html>