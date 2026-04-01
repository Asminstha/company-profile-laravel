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
<script src="https://unpkg.com/heroicons@2.0.18/dist/heroicons.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gradient-to-r from-blue-900 to-blue-700">

        {{-- Navbar --}}
        @include('components.navbar')
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
        {{-- Footer --}}
        @include('components.footer')
    </div>

 {{-- WhatsApp Button (Bottom Left) --}}
    <a href="https://wa.me/977XXXXXXXXXX" target="_blank" rel="noopener noreferrer" class="whatsapp-float" title="Chat with us on WhatsApp">
        <div class="wa-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path d="M16 0C7.164 0 0 7.163 0 16c0 2.82.737 5.463 2.027 7.754L0 32l8.454-2.017A15.93 15.93 0 0 0 16 32c8.836 0 16-7.163 16-16S24.836 0 16 0zm0 29.333a13.27 13.27 0 0 1-6.77-1.853l-.485-.288-5.016 1.197 1.22-4.886-.317-.5A13.242 13.242 0 0 1 2.667 16C2.667 8.636 8.636 2.667 16 2.667S29.333 8.636 29.333 16 23.364 29.333 16 29.333zm7.27-9.927c-.398-.199-2.354-1.162-2.719-1.295-.365-.133-.631-.199-.897.199-.266.398-1.031 1.295-1.264 1.561-.232.266-.465.299-.863.1-.398-.199-1.681-.62-3.202-1.977-1.183-1.057-1.982-2.363-2.214-2.761-.232-.398-.025-.613.175-.811.179-.178.398-.465.597-.697.199-.232.266-.398.398-.664.133-.266.066-.498-.033-.697-.1-.199-.897-2.162-1.23-2.96-.323-.777-.652-.672-.897-.684l-.764-.013c-.266 0-.697.1-1.063.498-.365.398-1.396 1.364-1.396 3.327 0 1.963 1.43 3.859 1.628 4.125.199.266 2.814 4.297 6.818 6.026.953.411 1.696.657 2.276.841.956.304 1.826.261 2.514.158.767-.114 2.354-.963 2.686-1.893.332-.93.332-1.727.232-1.893-.099-.166-.365-.266-.763-.465z"/>
            </svg>
        </div>
        <span class="wa-label">Chat with us</span>
    </a>

    {{-- Go To Top Button (Bottom Right) --}}
    <button class="go-top-btn" id="goTopBtn" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 4l-8 8h5v8h6v-8h5z"/>
        </svg>
    </button>


    {{-- carousel  --}}
    @stack('scripts')
</body>

</html>
