<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="{{ config('app.name', 'Kudang Koding') }}">
    <meta name="author" content="Kudang Koding">
    <meta name="description"
        content="Diagnose merupakan sistem pakar untuk melakukan diagnosa dini mengenai gangguan kecemasan.">
    <meta name="keywords" content="{{ config('app.name', 'Kudang Koding') }}, sistem pakar, gangguan kecemasan" />
    {{-- <link rel="shortcut icon" href="https://tailwindui.com/img/logos/workflow-mark-purple-600.svg" type="image/x-icon"> --}}
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">

    <title>{{ config('app.name', 'Kudang Koding') }} - {{ __('Expert System for Diagnosis of Anxiety Disorders') }}
    </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
</head>

<body class="font-sans antialiased text-gray-900">

    <div class="min-h-screen bg-gray-50">
        @livewire('navigation-bar-guest')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts

    <!-- Main JS -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
