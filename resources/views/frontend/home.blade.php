@extends('layouts.app')

@section('title', 'Home')

@section('content')


    <!-- HERO SECTION -->
    <section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

            <!-- Left Content -->
            <div>
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    Empowering Sustainable Development Through
                    <span class="text-yellow-400">Collaborative and Innovative Approaches</span>
                </h1>

                <p class="mt-6 text-lg text-gray-200">
                    Delivering tailored solutions that drive lasting change and transform communities.
                </p>

                <button
                    class="mt-6 bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold transition">
                    Learn More
                </button>
            </div>

            <!-- Right Image -->
            <div class="flex justify-center">
                <img src="https://via.placeholder.com/400" class="w-full max-w-md" alt="Hero Image">
            </div>

        </div>
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
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-2">Expert Team</h3>
                    <p class="text-gray-600 text-sm">
                        Diverse professionals bring extensive experience and expertise.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-2">Customized Solutions</h3>
                    <p class="text-gray-600 text-sm">
                        Tailored strategies addressing unique client challenges effectively.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-2">Comprehensive Services</h3>
                    <p class="text-gray-600 text-sm">
                        Full range of consultancy services for development.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-2">Client-Centric Focus</h3>
                    <p class="text-gray-600 text-sm">
                        Prioritizing client needs to deliver exceptional results.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">

            <p class="text-blue-600 uppercase tracking-wide">Our Services</p>
            <h2 class="text-3xl font-bold mt-2 mb-10">
                Comprehensive Solutions to Drive Sustainable Development
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 gap-y-8">

                <!-- Service Card -->
                <div
                    class="bg-blue-800 text-white p-10 rounded-xl shadow hover:scale-105 transition duration-300 flex items-center justify-center font-medium">
                    Software Development
                </div>
                <div
                    class="bg-blue-800 text-white p-10 rounded-xl shadow hover:scale-105 transition duration-300 flex items-center justify-center font-medium">
                    {{-- <div class="bg-blue-800 text-white p-8 rounded-xl shadow hover:scale-105 transition"> --}}
                    Cloud Computing Solutions
                </div>

                <div class="bg-blue-800 text-white p-8 rounded-xl shadow hover:scale-105 transition">
                    Website Development
                </div>

                <div class="bg-blue-800 text-white p-8 rounded-xl shadow hover:scale-105 transition">
                    IT Consulting
                </div>

                <div class="bg-blue-800 text-white p-8 rounded-xl shadow hover:scale-105 transition">
                    Managed IT Services
                </div>

                <div class="bg-blue-800 text-white p-8 rounded-xl shadow hover:scale-105 transition">
                    Data Analytics
                </div>

            </div>

        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">

            <p class="text-blue-600 uppercase tracking-wide">Our Products</p>

            <h2 class="text-3xl font-bold mt-2 mb-10">
                Innovative solutions for your success.
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <!-- Product 1 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg">
                        Human Resource Management Information System
                    </h3>
                    <p class="text-gray-600 mt-3 text-sm">
                        Optimize workforce management with our innovative HRMIS solution.
                    </p>
                </div>

                <!-- Product 2 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg">
                        Document Management System
                    </h3>
                    <p class="text-gray-600 mt-3 text-sm">
                        Organize, store, and retrieve documents effortlessly.
                    </p>
                </div>

                <!-- Product 3 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg">
                        Inventory Management System
                    </h3>
                    <p class="text-gray-600 mt-3 text-sm">
                        Efficiently track and manage stock levels.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- TECHNOLOGY SECTION -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

            <!-- Image -->
            <div class="flex justify-center">
                <img src="https://via.placeholder.com/400" class="w-full max-w-md" alt="Tech">
            </div>

            <!-- Content -->
            <div>
                <p class="text-blue-600 uppercase tracking-wide">Our Technology Expertise</p>

                <h2 class="text-3xl font-bold mt-2">
                    Utilizing Proven Technologies for Enhanced Client Performance
                </h2>

                <p class="mt-4 text-gray-600">
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
