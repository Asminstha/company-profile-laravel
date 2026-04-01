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

        <div class="text-center mb-12">
            <p class="text-xs font-semibold tracking-[0.2em] uppercase text-blue-600 mb-3">OUR SERVICES</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                Fueling Innovation with Technology<br>
                Your Ally for Digital Success!
            </h2>
        </div>

        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-8">

                <!-- LEFT MENU -->
                <div class="md:w-72 flex-shrink-0 space-y-0">
                    @foreach ($services as $service)
                        <button
                            class="service-btn w-full text-left px-5 py-4 text-gray-700 font-medium border-b border-gray-200 hover:text-blue-700 transition-colors duration-200 relative group"
                            data-id="{{ $service->id }}">
                            <span class="group-[.active]:font-bold group-[.active]:text-gray-900">
                                {{ $service->title }}
                            </span>
                        </button>
                    @endforeach
                </div>

                <!-- RIGHT CONTENT -->
                <div class="flex-1 bg-gray-50 p-8 rounded-lg border border-gray-200" id="serviceContent">

                    <p class="text-gray-700 mb-6 leading-relaxed" id="description">
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
        }

        .service-btn:first-child {
            font-weight: 700;
            color: #1e293b;
            border-bottom: 2px solid #1e3a8a;
        }
    </style>

    <script>
        document.querySelectorAll('.service-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.service-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                fetch(`/services/${this.dataset.id}`)
                    .then(res => res.json())
                    .then(data => {
                        document.getElementById('description').textContent = data.description;
                        document.getElementById('features').textContent = data.features;
                        document.getElementById('impact').textContent = data.impact;
                        document.getElementById('audience').textContent = data.audience;
                        const img = document.getElementById('image');
                        if (img && data.image) img.src = `/uploads/services/${data.image}`;
                    });
            });
        });
    </script>
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

    <!-- AJAX SCRIPT -->
    {{-- <script>
document.querySelectorAll('.service-btn').forEach(button => {
    button.addEventListener('click', function () {

        let id = this.getAttribute('data-id');

        fetch('/services/' + id)
            .then(res => res.json())
            .then(data => {

                document.getElementById('title').innerText = data.title;
                document.getElementById('description').innerText = data.description;
                document.getElementById('features').innerText = data.features ?? '';
                document.getElementById('impact').innerText = data.impact ?? '';
                document.getElementById('audience').innerText = data.audience ?? '';

                if (data.image) {
                    document.getElementById('image').src = '/uploads/services/' + data.image;
                }

            });
    });
});
</script> --}}
@endsection
