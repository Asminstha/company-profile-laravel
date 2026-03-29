<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--  SEO Meta Tags --}}
    @php
        $routeName = Route::currentRouteName() ?? 'home';
        $seo = \App\Models\SeoSetting::where('page', $routeName)->first();
    @endphp

    <title>{{ $seo->meta_title ?? 'My Website' }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? 'Default description' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        {{-- Navbar --}}
        @include('components.navbar')
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
        {{-- Footer --}}
        @include('components.footer')
    </div>

    {{-- carousel  --}}
    @stack('scripts')
</body>

</html>
