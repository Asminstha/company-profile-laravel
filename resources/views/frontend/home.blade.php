@php use Illuminate\Support\Str; @endphp
@extends('layouts.app')

@section('title', 'Home')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


@section('content')


    <!-- HERO SECTION -->
    <!-- HERO SECTION CAROUSEL -->
    <section class="swiper heroSwiper   max-h-[80vh]  bg-gradient-to-r from-blue-900 to-blue-700 text-white overflow-hidden">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide py-20">
                <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                            Empowering Sustainable Development Through
                            <span class="text-yellow-400">Collaborative and Innovative Approaches</span>
                        </h1>
                        <p class="mt-6 text-lg text-gray-200 text-justify">
                            Delivering tailored solutions that drive lasting change and transform communities.
                        </p>
                        <button
                            class="mt-6 bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold transition">
                            Learn More
                        </button>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/img/hero.png') }}" class="w-full max-w-md rounded-2xl " alt="Hero 1">
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide py-20">
                <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                            Expert Technology <span class="text-yellow-400">Solutions for Growth</span>
                        </h1>
                        <p class="mt-6 text-lg text-gray-200 text-justify">
                            Utilizing proven technologies to enhance client performance and business efficiency.
                        </p>
                        <button
                            class="mt-6 bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold transition">
                            Our Expertise
                        </button>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/img/tech.png') }}" class="w-full max-w-md rounded-2xl " alt="Hero 2">
                    </div>
                </div>
            </div>

        </div>

        <!-- Navigation controls (Optional) -->
        {{-- <div class="swiper-button-next !text-yellow-400"></div>
    <div class="swiper-button-prev !text-yellow-400"></div> --}}
        <div class="swiper-pagination !bottom-10"></div>
    </section>

    <!-- FEATURES SECTION -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 text-center">

            <p class="text-blue-600 uppercase tracking-wide">Features</p>
            <h2 class="text-3xl font-bold mt-2 mb-10">
                Core Highlights of Our Company
            </h2>

            <div class="grid md:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                    <div class="flex justify-center mb-4">
                        <div
                            class="bg-blue-50 p-4 rounded-full border border-blue-100 transition-all duration-300 hover:bg-blue-600 hover:scale-110 group cursor-pointer">
                            <!-- Users Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-10 h-10 text-blue-600 transition-colors duration-300 group-hover:text-white"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M17 20h5v-1a4 4 0 00-5-3.87M9 20H4v-1a4 4 0 015-3.87m8-5a4 4 0 11-8 0 4 4 0 018 0zM5 7a4 4 0 118 0 4 4 0 01-8 0z" />
                            </svg>
                        </div>
                    </div>

                    <h3 class="font-semibold text-lg mb-2">Expert Team</h3>
                    <p class="text-gray-600 text-sm">
                        Diverse professionals bring extensive experience and expertise.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                    <div class="flex justify-center mb-4">
                        <div
                            class="bg-blue-50 p-4 rounded-full border border-blue-100 transition-all duration-300 hover:bg-blue-600 hover:scale-110 group cursor-pointer">

                            <!-- Settings Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                class="w-10 h-10 text-blue-600 transition-colors duration-300 group-hover:text-white"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M11.983 5.5a1.5 1.5 0 012.034 0l.516.516a1.5 1.5 0 001.591.339l.694-.231a1.5 1.5 0 011.87.87l.256.62a1.5 1.5 0 001.224.93l.66.06a1.5 1.5 0 011.36 1.49v.78a1.5 1.5 0 01-1.36 1.49l-.66.06a1.5 1.5 0 00-1.224.93l-.256.62a1.5 1.5 0 01-1.87.87l-.694-.231a1.5 1.5 0 00-1.591.339l-.516.516a1.5 1.5 0 01-2.034 0l-.516-.516a1.5 1.5 0 00-1.591-.339l-.694.231a1.5 1.5 0 01-1.87-.87l-.256-.62a1.5 1.5 0 00-1.224-.93l-.66-.06A1.5 1.5 0 013 12.5v-.78a1.5 1.5 0 011.36-1.49l.66-.06a1.5 1.5 0 001.224-.93l.256-.62a1.5 1.5 0 011.87-.87l.694.231a1.5 1.5 0 001.591-.339l.516-.516z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Customized Solutions</h3>
                    <p class="text-gray-600 text-sm">
                        Tailored strategies addressing unique client challenges effectively.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                    <div class="flex justify-center mb-4">
                        <div
                            class="bg-blue-50 p-4 rounded-full border border-blue-100 transition-all duration-300 hover:bg-blue-600 hover:scale-110 group cursor-pointer">

                            <!-- Layers Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                class="w-10 h-10 text-blue-600 transition-colors duration-300 group-hover:text-white"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M12 2l9 5-9 5-9-5 9-5zm0 7l9 5-9 5-9-5 9-5z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Comprehensive Services</h3>
                    <p class="text-gray-600 text-sm">
                        Full range of consultancy services for development.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                    <div class="flex justify-center mb-4">
                        <div
                            class="bg-blue-50 p-4 rounded-full border border-blue-100 transition-all duration-300 hover:bg-blue-600 hover:scale-110 group cursor-pointer">

                            <!-- Heart Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                class="w-10 h-10 text-blue-600 transition-colors duration-300 group-hover:text-white"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21 4.318 12.682a4.5 4.5 0 010-6.364z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Client-Centric Focus</h3>
                    <p class="text-gray-600 text-sm">
                        Prioritizing client needs to deliver exceptional results.
                    </p>
                </div>

            </div>

        </div>
    </section>
    <!-- SERVICES SECTION -->
    <section class="py-20 bg-gray-200">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Title -->
            <div class="text-center mb-14">
                <h2 class="text-4xl font-bold text-gray-800">
                    Our Services
                </h2>
                <p class="text-gray-500 mt-3">
                    We provide high quality digital solutions to grow your business
                </p>
            </div>

            <!-- Grid -->
            <div class="grid md:grid-cols-3 gap-10">

                @foreach ($services as $service)
                    <div
                        class="group bg-gray-100 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">

                        <!-- Image -->
                        <div class="overflow-hidden">
                            <img src="{{ asset('uploads/services/' . $service->image) }}"
                                class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">
                        </div>

                        <!-- Content -->
                        <div class="p-6">

                            <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-blue-600 transition">
                                {{ $service->title }}
                            </h3>

                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                {{ \Illuminate\Support\Str::limit($service->description, 100) }}
                            </p>

                            <!-- Button -->
                            <a href="#" class="text-blue-600 font-medium hover:underline">
                                Learn More →
                            </a>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>



    <!-- PRODUCTS SECTION -->
  <section class="py-20 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Header Section -->
        <div class="text-center mb-16">
            <p class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-3">Our Products</p>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">
                Innovative solutions for your success.
            </h2>
            <div class="w-20 h-1 bg-blue-600 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Product 1: HRMIS -->
            <div class="group bg-white p-8 rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 flex flex-col h-full">
                <div class="flex justify-center mb-8">
                    <!-- Icon Container: Perfect Circle with Hover Sync -->
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center transition-all duration-500 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-110 shadow-inner">
                        <svg xmlns="http://w3.org" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-1a4 4 0 00-5-3.87M9 20H4v-1a4 4 0 015-3.87m8-5a4 4 0 11-8 0 4 4 0 018 0zM5 7a4 4 0 118 0 4 4 0 01-8 0z" />
                        </svg>
                    </div>
                </div>

                <h3 class="font-bold text-xl text-slate-800 mb-4 transition-colors duration-300 group-hover:text-blue-600">
                    Human Resource Management Information System
                </h3>
                <p class="text-gray-500 leading-relaxed mb-6 flex-grow text-justify">
                    Optimize workforce management with our innovative HRMIS solution, designed for modern efficiency.
                </p>
                <div class="pt-6 border-t border-gray-50">
                    <a href="#" class="text-blue-600 font-bold inline-flex items-center hover:gap-2 transition-all">
                        Learn More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Product 2: DMS -->
            <div class="group bg-white p-8 rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 flex flex-col h-full">
                <div class="flex justify-center mb-8">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center transition-all duration-500 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-110 shadow-inner">
                        <svg xmlns="http://w3.org" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6M9 8h6m2 12H7a2 2 0 01-2-2V6a2 2 0 012-2h5l5 5v9a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
                <h3 class="font-bold text-xl text-slate-800 mb-4 transition-colors duration-300 group-hover:text-blue-600">
                    Document Management System
                </h3>
                <p class="text-gray-500 leading-relaxed mb-6 flex-grow text-justify">
                    Organize, store, and retrieve documents effortlessly with high-level security and indexing.
                </p>
                <div class="pt-6 border-t border-gray-50">
                    <a href="#" class="text-blue-600 font-bold inline-flex items-center hover:gap-2 transition-all">
                        Learn More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Product 3: IMS -->
            <div class="group bg-white p-8 rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 flex flex-col h-full">
                <div class="flex justify-center mb-8">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center transition-all duration-500 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-110 shadow-inner">
                        <svg xmlns="http://w3.org" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 13V7a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 002 7v6m18 0l-8 5-8-5m16 0l-8-5-8 5" />
                        </svg>
                    </div>
                </div>
                <h3 class="font-bold text-xl text-slate-800 mb-4 transition-colors duration-300 group-hover:text-blue-600">
                    Inventory Management System
                </h3>
                <p class="text-gray-500 leading-relaxed mb-6 flex-grow text-justify">
                    Efficiently track and manage stock levels in real-time across multiple locations.
                </p>
                <div class="pt-6 border-t border-gray-50">
                    <a href="#" class="text-blue-600 font-bold inline-flex items-center hover:gap-2 transition-all">
                        Learn More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- TECHNOLOGY SECTION -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

            <!-- Image -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/img/tech.png') }}" class="w-full max-w-md" alt="Tech">
            </div>

            <!-- Content -->
            <div>
                <p class="text-blue-600 uppercase tracking-wide">Our Technology Expertise</p>

                <h2 class="text-3xl font-bold mt-2">
                    Utilizing Proven Technologies for Enhanced Client Performance
                </h2>

                <p class="mt-4 text-gray-600 text-justify">
                    We have extensive experience working with technologies such as .NET and PHP.
                    This deep expertise allows us to provide high-performance solutions.
                </p>

                <!-- Tech List -->
                {{-- <div class="flex flex-wrap gap-6 mt-6 font-semibold text-gray-700">
                    <span>.NET</span>
                    <span>PHP</span>
                    <span>Oracle</span>
                    <span>MySQL</span>
                </div> --}}

                <div class="flex flex-wrap gap-3 mt-6">
                    <span class="bg-blue-100 text-blue-800 px-4 py-1.5 rounded-full text-sm font-bold">.NET</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-1.5 rounded-full text-sm font-bold">PHP</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-1.5 rounded-full text-sm font-bold">Oracle</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-1.5 rounded-full text-sm font-bold">MySQL</span>
                </div>

                <button class="mt-6 bg-yellow-500 hover:bg-yellow-400 px-6 py-3 rounded-lg font-semibold">
                    Request a Quote →
                </button>
            </div>

        </div>
    </section>




@endsection

@push('scripts')
    <!-- 1. Load the Swiper Library -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- 2. Initialize the Carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.heroSwiper', {
                loop: true,
                speed: 800,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                autoHeight: false,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                // navigation: {
                //     nextEl: '.swiper-button-next',
                //     prevEl: '.swiper-button-prev',
                // },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>
@endpush
