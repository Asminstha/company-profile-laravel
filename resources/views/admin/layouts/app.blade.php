<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans antialiased overflow-hidden"> <!-- Prevent body scroll -->

<div class="flex h-screen overflow-hidden relative"> <!-- h-screen ensures a fixed viewport height -->

    <!-- MOBILE OVERLAY -->
    <div id="sidebar-overlay" onclick="toggleSidebar()"
        class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-30 hidden md:hidden transition-all duration-300">
    </div>

    <!-- SIDEBAR (Fixed Height, Scrollable internally) -->
    <aside id="sidebar"
        class="fixed inset-y-0 left-0 w-72 bg-blue-900 text-white transform -translate-x-full md:translate-x-0 md:static transition-transform duration-300 ease-in-out z-40 flex flex-col h-screen shrink-0 shadow-2xl md:shadow-none">

        <!-- Sidebar Header with Close Icon -->
        <div class="h-16 flex items-center justify-between px-6 border-b border-blue-800/50 shrink-0">
            <h2 class="text-xl font-bold tracking-wider uppercase">Admin <span class="text-blue-400">Panel</span></h2>

            <!-- CLOSE CROSS ICON (Mobile Only) -->
            <button onclick="toggleSidebar()" class="md:hidden p-2 -mr-2 text-blue-300 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto custom-scrollbar">
            @php
                $navItems = [
                    ['url' => 'admin/dashboard', 'label' => 'Dashboard', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                    ['url' => 'admin/services*', 'label' => 'Services', 'icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ['url' => 'admin/messages*', 'label' => 'Messages', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ['url' => 'admin/about*', 'label' => 'About Us', 'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['url' => 'admin/seo*', 'label' => 'SEO Settings', 'icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z'],
                ];
            @endphp

            @foreach($navItems as $item)
                <a href="{{ url(str_replace('*', '', $item['url'])) }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all group
                    {{ request()->is($item['url']) ? 'bg-blue-600 text-white shadow-lg shadow-blue-900/40' : 'text-blue-100 hover:bg-blue-800/50 hover:text-white' }}">
                    <svg class="w-5 h-5 opacity-70 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path>
                    </svg>
                    <span class="text-sm font-medium">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
    </aside>

    <!-- MAIN CONTENT AREA -->
    <div class="flex-1 flex flex-col min-w-0">

        <!-- TOP BAR (Sticky) -->
        <header class="bg-white/80 backdrop-blur-md h-16 flex items-center justify-between px-4 md:px-8 border-b border-gray-200 z-20 shrink-0">
            <div class="flex items-center">
                <button onclick="toggleSidebar()"
                    class="md:hidden mr-4 p-2 rounded-xl bg-slate-100 text-slate-600 hover:bg-blue-100 hover:text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
                <h1 class="text-lg font-bold text-slate-800">@yield('page_title', 'Dashboard')</h1>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="flex items-center gap-2 bg-red-50 text-red-600 hover:bg-red-600 hover:text-white px-4 py-2 rounded-xl text-sm font-bold transition-all border border-red-100 hover:border-red-600 active:scale-95">
                    <span>Logout</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </button>
            </form>
        </header>

        <!-- PAGE CONTENT (Scrollable Section) -->
        <main class="flex-1 overflow-y-auto p-4 md:p-8">
            <div class="max-w-7xl mx-auto">
                @yield('content')
            </div>
        </main>

    </div>
</div>

<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
}
</script>

</body>
</html>
