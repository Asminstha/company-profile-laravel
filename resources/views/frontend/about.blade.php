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
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

            <!-- LEFT -->
            <div>
                <p class="text-blue-600 uppercase tracking-widest text-sm mb-2">
                    Know About Us
                </p>

                <h2 class="text-3xl font-bold mb-4">
                    {{ $about->heading ?? 'We strive to be a better technology partner.' }}
                </h2>

                <p class="text-gray-600 leading-relaxed mb-6">
                    {{ $about->description ?? 'Company description here...' }}
                </p>

                <!-- STATS -->
                <div class="flex gap-10 mt-6">

                    <div>
                        <h3 class="text-2xl font-bold">{{ $about->experience ?? '14+' }}</h3>
                        <p class="text-gray-500 text-sm">years completed</p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold">{{ $about->projects ?? '50+' }}</h3>
                        <p class="text-gray-500 text-sm">Project Completed</p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold">{{ $about->experts ?? '60+' }}</h3>
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
                    class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/4 bg-white rounded-full border-4 border-blue-50 shadow-2xl p-10 w-40 h-40 flex flex-col items-center justify-center text-center">
                    <h3 class="text-2xl font-bold text-blue-700">
                        {{ $about->experience ?? '15+' }}
                    </h3>
                    <p class="text-xs text-gray-600">YEARS OF <br> EXPERIENCE</p>
                </div>
            </div>

        </div>
    </section>

    <!-- FEATURES -->
    <section class="py-16 bg-gray-50 text-center">

        <h2 class="text-2xl font-semibold mb-2">
            What makes us the preferred choice compared to other companies?
        </h2>

        <p class="text-gray-500 mb-10">
            Where Your Vision Meets Our Expertise: Crafting Tailored Software for Every Challenge.
        </p>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6 px-6">

            <!-- MISSION -->
            <div class="border border-dashed border-blue-300 p-8 rounded-xl hover:shadow-lg transition">
                <div
                    class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full border border-dashed border-blue-400">
                    ⚙️
                </div>

                <h3 class="text-lg font-semibold mb-2">
                    {{ $about->mission_title ?? 'Our Mission' }}
                </h3>

                <p class="text-gray-500 text-sm">
                    {{ $about->mission_desc ?? 'Default mission description' }}
                </p>
            </div>

            <!-- VISION -->
            <div class="border border-dashed border-blue-300 p-8 rounded-xl hover:shadow-lg transition">
                <div
                    class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full border border-dashed border-blue-400">
                    🎯
                </div>

                <h3 class="text-lg font-semibold mb-2">
                    {{ $about->vision_title ?? 'Our Vision' }}
                </h3>

                <p class="text-gray-500 text-sm">
                    {{ $about->vision_desc ?? 'Default vision description' }}
                </p>
            </div>

            <!-- GOALS -->
            <div class="border border-dashed border-blue-300 p-8 rounded-xl hover:shadow-lg transition">
                <div
                    class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full border border-dashed border-blue-400">
                    🚀
                </div>

                <h3 class="text-lg font-semibold mb-2">
                    {{ $about->goals_title ?? 'Our Goals' }}
                </h3>

                <p class="text-gray-500 text-sm">
                    {{ $about->goals_desc ?? 'Default goals description' }}
                </p>
            </div>

        </div>

    </section>

    <!-- CTA SECTION -->
    <section class="py-16 bg-gray-50 text-center">
        <h2 class="text-2xl font-semibold mb-2">Get in Touch with Us</h2>

        <p class="text-gray-500 mb-6">
            We're here to assist you with any questions or concerns!
        </p>

        <a href="{{ route('contact') }}" class="bg-yellow-500 text-white px-6 py-3 rounded hover:bg-yellow-600 transition">
            Contact Us
        </a>
    </section>
@endsection
