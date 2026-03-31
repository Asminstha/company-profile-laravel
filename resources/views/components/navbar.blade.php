
<nav id="mainNav" class="navbar-main fixed top-0 left-0 w-full z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-24">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-10 group">

                <img
                    src="{{ asset('assets/img/logo.png') }}"
                    alt="DECAT Logo"
                    class="h-12 w-12  scale-125 object-contain transition-transform duration-300 group-hover:scale-150"
                >
                <div class="leading-tight scale-125">
                    <div class="text-white font-bold text-sm tracking-wide">Development Catalyst</div>
                    <div class="text-white/80 text-xs tracking-wider">Consultancy Pvt. Ltd.</div>
                </div>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center gap-1 scale-125">
                <a href="{{ route('home') }}"
                   class="nav-link px-4 py-2 rounded-md text-sm font-medium text-white/90 hover:text-white transition-all duration-200 relative
                          {{ request()->routeIs('home') ? 'nav-link-active' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}"
                   class="nav-link px-4 py-2 rounded-md text-sm font-medium text-white/90 hover:text-white transition-all duration-200 relative
                          {{ request()->routeIs('about') ? 'nav-link-active' : '' }}">
                    About Us
                </a>
                <a href="{{ route('services') }}"
                   class="nav-link px-4 py-2 rounded-md text-sm font-medium text-white/90 hover:text-white transition-all duration-200 relative
                          {{ request()->routeIs('services') ? 'nav-link-active' : '' }}">
                    Services
                </a>
                <a href="{{ route('contact') }}"
                   class="ml-2 px-5 py-2 bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold rounded-md transition-all duration-200 hover:shadow-lg hover:shadow-amber-500/30 hover:-translate-y-0.5">
                    Contact Us
                </a>
            </div>

            {{-- Mobile Hamburger --}}
            <button id="mobileMenuBtn"
                    class="md:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 rounded-md focus:outline-none"
                    aria-label="Toggle menu">
                <span class="hamburger-line block w-6 h-0.5 bg-white transition-all duration-300"></span>
                <span class="hamburger-line block w-6 h-0.5 bg-white transition-all duration-300"></span>
                <span class="hamburger-line block w-4 h-0.5 bg-white transition-all duration-300"></span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu Dropdown --}}
    <div id="mobileMenu"
         class="md:hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out"
         style="background: #1a2b6df7; backdrop-filter: blur(12px);">
        <div class="px-4 py-4 flex flex-col gap-1 border-t border-white/10">
            <a href="{{ route('home') }}"
               class="px-4 py-3 text-white/90 hover:text-white hover:bg-white/10 rounded-md text-sm font-medium transition-all duration-200
                      {{ request()->routeIs('home') ? 'bg-white/10 text-white' : '' }}">
                Home
            </a>
            <a href="{{ route('about') }}"
               class="px-4 py-3 text-white/90 hover:text-white hover:bg-white/10 rounded-md text-sm font-medium transition-all duration-200
                      {{ request()->routeIs('about') ? 'bg-white/10 text-white' : '' }}">
                About Us
            </a>
            <a href="{{ route('services') }}"
               class="px-4 py-3 text-white/90 hover:text-white hover:bg-white/10 rounded-md text-sm font-medium transition-all duration-200
                      {{ request()->routeIs('services') ? 'bg-white/10 text-white' : '' }}">
                Services
            </a>
            <a href="{{ route('contact') }}"
               class="mt-2 px-4 py-3 bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold rounded-md text-center transition-all duration-200">
                Contact Us
            </a>
        </div>
    </div>
</nav>

{{-- Navbar spacing (so content doesn't hide under fixed nav) --}}
<div class="h-24"></div>
