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
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-3">
                    What We Offer
                </h2>
                <p class="text-gray-500">
                    We provide high-quality IT solutions tailored to your business.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                @forelse($services as $service)
                    <div
                        class="bg-white border rounded-xl shadow-sm hover:shadow-xl transition duration-300 overflow-hidden">

                        <!-- IMAGE -->
                        @if ($service->image)
                            <img src="{{ asset('uploads/services/' . $service->image) }}" class="w-full h-48 object-cover">
                        @endif

                        <!-- CONTENT -->
                        <div class="p-6 text-center">

                            <h3 class="text-xl font-semibold mb-3">
                                {{ $service->title }}
                            </h3>

                            <p class="text-gray-500 text-sm">
                                {{ $service->description }}
                            </p>

                        </div>

                    </div>
                @empty
                    <p class="text-center col-span-3 text-gray-500">
                        No services available
                    </p>
                @endforelse

            </div>


        </div>


    </section>


     <!-- CTA SECTION -->
        <section class="py-16 bg-gray-50 text-center">
            <h2 class="text-2xl font-semibold mb-2">Get in Touch with Us</h2>

            <p class="text-gray-500 mb-6">
                We're here to assist you with any questions or concerns!
            </p>

            <a href="{{ route('contact') }}"
                class="bg-yellow-500 text-white px-6 py-3 rounded hover:bg-yellow-600 transition">
                Contact Us
            </a>
        </section>
@endsection
