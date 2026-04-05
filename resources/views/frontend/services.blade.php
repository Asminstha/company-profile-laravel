@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20 text-center">
        <h1 class="text-3xl font-semibold">Our Services</h1>

        <div class="mt-4 inline-flex items-center gap-2 bg-white/10 px-4 py-2 rounded-full text-sm">
            <span> <a href="{{ route('home') }}" class="text-white hover:text-blue-300">Home</a></span>
            <span>›</span>
            <span>Services</span>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="w-full py-16 md:py-24 bg-white border-b border-gray-100 overflow-hidden">
    <div data-aos="fade-up" class="max-w-7xl mx-auto px-6 lg:px-16 flex flex-col md:flex-row items-center gap-12 md:gap-16">

        <!-- Left Content -->
        <div class="flex-1 text-center md:text-left">
            <span class="text-xs font-semibold tracking-[0.2em] text-blue-500 uppercase mb-4 block">
                Our Services
            </span>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                Creative Solutions for an <br class="hidden sm:block"> Interconnected World.
            </h2>

            <p class="text-gray-500 text-base leading-relaxed mb-8 max-w-lg mx-auto md:mx-0 text-justify">
                At our software company, we deliver innovative solutions that empower businesses in a
                connected world. Our expertise transforms challenges into opportunities, enhancing
                efficiency and driving growth.
            </p>

            <a href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 text-gray-900 font-bold text-sm group transition-all duration-300">
                Get In Touch
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                    class="transform group-hover:translate-x-1.5 transition-transform duration-300">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <!-- Right Illustration (Adjusted classes) -->
        <div data-aos="zoom-in" class="flex-1 flex items-center justify-center md:justify-end w-full max-w-sm md:max-w-none mx-auto md:mx-0">
            <div class="relative w-full max-w-md md:translate-x-10 lg:translate-x-16">
                <div
                    class="absolute inset-0 bg-slate-100 rounded-[60%_40%_50%_50%/50%_60%_40%_55%] scale-90 translate-y-2">
                </div>
                <img src="{{ asset('assets/img/service.png') }}" alt="Developer working at desk"
                    class="relative z-10 w-full h-auto object-contain drop-shadow-sm">
            </div>
        </div>

    </div>
</section>

    <section class="py-16 bg-white">

        <div class="text-center mb-12">
            <p class="text-xs font-semibold tracking-[0.2em] uppercase text-blue-600 mb-3">OUR SERVICES</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                Fueling Innovation with Technology<br>
                Your Ally for Digital Success!
            </h2>
        </div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-8">

                <!-- LEFT MENU -->
                <div data-aos="zoom-in" class="md:w-72 flex-shrink-0 space-y-0">
                    @foreach ($services as $service)
                        <button
                            class="service-btn w-full text-left px-5 py-4 text-gray-700 font-medium border-b border-gray-200 hover:text-blue-700 transition-all duration-200 relative"
                            data-id="{{ $service->id }}">
                            {{ $service->title }}
                        </button>
                    @endforeach

                </div>

                <!-- RIGHT CONTENT -->
                <div data-aos="fade-up" class="flex-1 bg-gray-50 p-8 rounded-lg border border-gray-200" id="serviceContent">

                    <p class="text-gray-700 mb-6 leading-relaxed text-justify" id="description">
                        {{ $firstService->description ?? '' }}
                    </p>

                    <div class="space-y-4 text-gray-700 text-sm">
                        <div class="flex gap-2">
                            <span class="text-blue-700 font-bold mt-0.5">◆</span>
                            <div>
                                <strong class="text-gray-900">Key Features</strong><br>
                                <span id="features">{{ $firstService->features ?? '' }}</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <span class="text-blue-700 font-bold mt-0.5">◆</span>
                            <div>
                                <strong class="text-gray-900">Impact on Organizations</strong><br>
                                <span id="impact">{{ $firstService->impact ?? '' }}</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <span class="text-blue-700 font-bold mt-0.5">◆</span>
                            <div>
                                <strong class="text-gray-900">Target Audience</strong><br>
                                <span id="audience">{{ $firstService->audience ?? '' }}</span>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>

    </section>

    <style>
        .service-btn.active {
            font-weight: 700;
            color: #1e293b;
            border-bottom: 2px solid #1e3a8a;
            background-color: #f3f4f6;
        }
    </style>

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

    <!-- AJAX SCRIPT -->



    <script>
        document.querySelectorAll('.service-btn').forEach((button, index) => {
            // Set the first button as active on page load
            if (index === 0) button.classList.add('active');

            button.addEventListener('click', function() {
                // 1. UI: Handle active class toggle
                document.querySelectorAll('.service-btn').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // 2. DATA: Fetch service details
                let id = this.getAttribute('data-id');

                fetch('/services/' + id)
                    .then(res => res.json())
                    .then(data => {
                        // Update text content safely
                        document.getElementById('description').innerText = data.description ?? '';
                        document.getElementById('features').innerText = data.features ?? '';
                        document.getElementById('impact').innerText = data.impact ?? '';
                        document.getElementById('audience').innerText = data.audience ?? '';

                        // Handle image if  adding an <img id="serviceImage"> tag later
                        const img = document.getElementById('serviceImage');
                        if (img && data.image) {
                            img.src = '/uploads/services/' + data.image;
                            img.classList.remove('hidden');
                        }
                    })
                    .catch(err => console.error('Error fetching service:', err));
            });
        });
    </script>
@endsection
