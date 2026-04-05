@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20 text-center">
        <h1 class="text-3xl font-semibold">About Us</h1>

        <div class="mt-4 inline-flex items-center gap-2 bg-white/10 px-4 py-2 rounded-full text-sm">
            <span> <a href="{{ route('home') }}" class="text-white hover:text-blue-300">Home</a></span>
            <span>›</span>
            <span>About Us</span>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="py-16 bg-white">
        <div data-aos="zoom-in" class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

            <!-- LEFT -->
            <div>
                <p class="text-blue-600 uppercase tracking-widest text-sm mb-2">
                    Know About Us
                </p>

                <h2 class="text-3xl font-bold mb-4">
                    {{ $about->heading ?? 'We strive to be a better technology partner.' }}
                </h2>

                <p class="text-gray-600 leading-relaxed mb-6 text-justify">
                    {{ $about->description ?? 'Company description here...' }}
                </p>

                <!-- STATS -->
                <div class="flex gap-10 mt-6">

                    <div <h3 class="text-2xl font-bold">{{ $about->experience ?? '14+' }}</h3>
                        <p class="text-gray-500 text-sm">years completed</p>
                    </div>

                    <div <h3 class="text-2xl font-bold">{{ $about->projects ?? '50+' }}</h3>
                        <p class="text-gray-500 text-sm">Project Completed</p>
                    </div>

                    <div <h3 class="text-2xl font-bold">{{ $about->experts ?? '60+' }}</h3>
                        <p class="text-gray-500 text-sm">Skilled Experts</p>
                    </div>

                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative max-w-md mx-auto">
                @if (!empty($about) && $about->image)
                    <img src="{{ asset('uploads/about/' . $about->image) }}"
                        class="rounded-xl shadow-lg w-full object-cover" alt="{{ $about->heading ?? 'About Us' }}">
                @else
                    <!-- Fallback image if no record exists -->
                    <img src="{{ asset('assets/img/about.jpg') }}" class="rounded-xl shadow-lg w-full object-cover"
                        alt="Default About">
                @endif

                <!-- EXPERIENCE BADGE -->
                <div
                    class="absolute
           top-2 right-2
           sm:top-0 sm:right-0
           translate-x-0 translate-y-0
           sm:translate-x-1/3 sm:-translate-y-1/4
           bg-white rounded-full border-4 border-blue-50 shadow-2xl
           p-4 sm:p-6 md:p-8
           w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40
           flex flex-col items-center justify-center text-center">

                    <h3 class="text-sm sm:text-lg md:text-2xl font-bold text-blue-700">
                        {{ $about->experience ?? '15+' }}
                    </h3>

                    <p class="text-[8px] sm:text-xs text-gray-600 leading-tight">
                        YEARS OF <br> EXPERIENCE
                    </p>
                </div>

            </div>
    </section>

    <!-- FEATURES -->
    <section class="py-16 bg-gray-50 text-center">

        <h2 class="text-3xl font-semibold mb-2 p-2">
            What makes us the preferred choice compared to other companies?
        </h2>

        <p class="text-gray-500 mb-10 p-2">
            Where Your Vision Meets Our Expertise: Crafting Tailored Software for Every Challenge.
        </p>


        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6">

            <!-- MISSION -->
            <div data-aos="zoom-in"
                class="group relative bg-white border border-dashed border-blue-200 p-8 rounded-2xl hover:border-blue-500 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center flex flex-col h-full">
                <div
                    class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full border-2 border-dashed border-blue-400 bg-blue-50 text-2xl transition-all duration-300 group-hover:bg-blue-600 group-hover:border-solid group-hover:scale-110">
                    <span class="group-hover:animate-bounce">⚙️</span>
                </div>

                <h3 class="text-xl font-bold mb-3 text-slate-800 group-hover:text-blue-600 transition-colors">
                    {{ $about->mission_title ?? 'Our Mission' }}
                </h3>

                <p class="text-gray-500 text-sm leading-relaxed flex-grow">
                    {{ $about->mission_desc ?? 'To empower businesses through innovative technology and strategic consulting.' }}
                </p>
            </div>

            <!-- VISION -->
            <div data-aos="zoom-in"
                class="group relative bg-white border border-dashed border-blue-200 p-8 rounded-2xl hover:border-blue-500 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center flex flex-col h-full">
                <div
                    class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full border-2 border-dashed border-blue-400 bg-blue-50 text-2xl transition-all duration-300 group-hover:bg-blue-600 group-hover:border-solid group-hover:scale-110">
                    <span class="group-hover:animate-bounce">🎯</span>
                </div>

                <h3 class="text-xl font-bold mb-3 text-slate-800 group-hover:text-blue-600 transition-colors">
                    {{ $about->vision_title ?? 'Our Vision' }}
                </h3>

                <p class="text-gray-500 text-sm leading-relaxed flex-grow">
                    {{ $about->vision_desc ?? 'To be the global leader in digital transformation and organizational excellence.' }}
                </p>
            </div>

            <!-- GOALS -->
            <div data-aos="zoom-in"
                class="group relative bg-white border border-dashed border-blue-200 p-8 rounded-2xl hover:border-blue-500 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center flex flex-col h-full">
                <div
                    class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full border-2 border-dashed border-blue-400 bg-blue-50 text-2xl transition-all duration-300 group-hover:bg-blue-600 group-hover:border-solid group-hover:scale-110">
                    <span class="group-hover:animate-bounce">🚀</span>
                </div>

                <h3 class="text-xl font-bold mb-3 text-slate-800 group-hover:text-blue-600 transition-colors">
                    {{ $about->goals_title ?? 'Our Goals' }}
                </h3>

                <p class="text-gray-500 text-sm leading-relaxed flex-grow">
                    {{ $about->goals_desc ?? 'Achieving sustainable growth while delivering measurable value to our stakeholders.' }}
                </p>
            </div>

        </div>

    </section>

    <!-- CTA SECTION -->
    <section data-aos="zoom-in" class="py-16 bg-gray-50 text-center">
        <h2 class="text-2xl font-semibold mb-2">Get in Touch with Us</h2>

        <p class="text-gray-500 mb-6">
            We're here to assist you with any questions or concerns!
        </p>

        <a href="{{ route('contact') }}" class="bg-yellow-500 text-white px-6 py-3 rounded hover:bg-yellow-600 transition">
            Contact Us
        </a>
    </section>
@endsection
