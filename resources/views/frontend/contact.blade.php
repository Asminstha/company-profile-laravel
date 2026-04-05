@extends('layouts.app')

@section('content')

    <!-- 🔵 HERO / BREADCRUMB -->
    <section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <h1 class="text-3xl font-bold mb-4">Contact Us</h1>

            <div class="inline-flex items-center space-x-2 bg-blue-800 px-4 py-2 rounded-full text-sm">
                <span><a href="{{ route('home') }}" class="text-white hover:text-blue-300">Home</a></span>
                <span>›</span>
                <span>Contact Us </span>
            </div>

        </div>
    </section>

    <!-- ⚪ CONTACT SECTION -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

            <!-- LEFT SIDE -->
            <div data-aos="fade-up" class="space-y-6">

                <!-- Phone -->
                <div class="bg-white p-5 rounded-xl shadow flex items-start space-x-4">
                    <div class="text-blue-600 text-xl">📞</div>
                    <div>
                        <h4 class="font-semibold text-gray-700">Phone Number</h4>
                        <p class="text-gray-500 text-sm">+977-9849142121</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="bg-white p-5 rounded-xl shadow flex items-start space-x-4">
                    <div class="text-blue-600 text-xl">✉️</div>
                    <div>
                        <h4 class="font-semibold text-gray-700">Message Us</h4>
                        <p class="text-gray-500 text-sm">info@devcatalyst.com.np</p>
                    </div>
                </div>

                <!-- Address -->
                <div class="bg-white p-5 rounded-xl shadow flex items-start space-x-4">
                    <div class="text-blue-600 text-xl">➤</div>
                    <div>
                        <h4 class="font-semibold text-gray-700">Office Address</h4>
                        <p class="text-gray-500 text-sm">Nagarjun-05, Kathmandu, Nepal</p>
                    </div>
                </div>

            </div>

            <!-- RIGHT SIDE FORM -->
            <div data-aos="fade-up" class="md:col-span-2 bg-white p-8 rounded-xl shadow">

                <!-- Success -->
                @if (session('success'))
                    <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form action="{{ route('contact.submit') }}" method="POST" class="grid md:grid-cols-2 gap-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label class="text-sm text-gray-600">Full Name</label>
                        <input type="text" name="name"
                            class="w-full border p-3 rounded mt-1 focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter full name" required>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="text-sm text-gray-600">Email Address</label>
                        <input type="email" name="email"
                            class="w-full border p-3 rounded mt-1 focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter email address" required>
                    </div>

                    <!-- Address -->
                    <div>
                        <label class="text-sm text-gray-600">Address</label>
                        <input type="text" name="address" class="w-full border p-3 rounded mt-1"
                            placeholder="Enter Address">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="text-sm text-gray-600">Phone Number</label>
                        <input type="text" name="phone" class="w-full border p-3 rounded mt-1"
                           pattern="[0-9]{10}"
    maxlength="10"  placeholder="Enter Phone Number 98XXXXXXXX ">
                    </div>

                    <!-- Message -->
                    <div class="md:col-span-2">
                        <label class="text-sm text-gray-600">Message</label>
                        <textarea name="message" class="w-full border p-3 rounded mt-1 focus:ring-2 focus:ring-blue-500" rows="5"
                            placeholder="Enter Message" required></textarea>
                    </div>

                    <!-- Button -->
                    <div class="md:col-span-2 text-right">
                        <button class="bg-yellow-500 text-white px-6 py-3 rounded hover:bg-yellow-600 transition">
                            Send Message
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </section>

        <!-- 🗺️ MAP SECTION -->
    <section class="pb-16 bg-gray-50">
        <div data-aos="fade-up" class="max-w-7xl mx-auto px-6">
            <div class="w-full h-96 rounded-xl overflow-hidden shadow-lg border-4 border-white">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.924591127006!2d85.32951859659794!3d27.694703218571817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew%20Baneshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1775242751262!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>



@endsection
