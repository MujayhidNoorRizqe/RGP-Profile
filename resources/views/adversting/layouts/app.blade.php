<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'RG Promosindo') }}</title>
    <meta name="description" content="Percetakan modern dan profesional — Restu Guru Promosindo">

    <link rel="icon" type="image/png" href="{{ asset('images/logo-restu-guru-promosindo.webp') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="bg-white text-gray-800">

    {{-- NAVBAR --}}
    @include('adversting.components.navbar')

    <main class="pt-20 min-h-screen">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('adversting.components.footer')

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="{{ asset('js/anim.js') }}" defer></script>
</body>
</html>
