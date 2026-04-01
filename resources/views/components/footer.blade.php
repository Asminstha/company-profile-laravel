<footer class="bg-blue-900 text-white pt-12 pb-6">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-10">

        <!-- Left -->
        <div>
            <a href="/" class="flex items-center gap-10 group">

                <img src="{{ asset('assets/img/logo.png') }}" alt="DECAT Logo"
                    class="h-12 w-12  scale-125 object-contain transition-transform duration-300 group-hover:scale-150">
                <div class="leading-tight scale-125">
                    <div class="text-white font-bold text-sm tracking-wide">Development Catalyst</div>
                    <div class="text-white/80 text-xs tracking-wider">Consultancy Pvt. Ltd.</div>
                </div>
            </a>
            <br>

            <p class="text-sm mb-2">📍 Nagarjun-05, Kathmandu, Nepal</p>
            <p class="text-sm mb-2">📧 info@devcatalyst.com.np</p>
            <p class="text-sm mb-2">📞 984912121</p>
            <p class="text-sm">🌐 www.devcatalyst.com.np</p>
        </div>

        <!-- Middle -->
        <div>
            <h3 class="font-semibold mb-4">Page Links</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-yellow-400">About Company</a></li>
                <li><a href="#" class="hover:text-yellow-400">Services</a></li>
                <li><a href="#" class="hover:text-yellow-400">Products</a></li>
            </ul>
        </div>

        <!-- Right -->
        <div>
            <h3 class="font-semibold mb-4">Services</h3>
            <ul class="space-y-2 text-sm">
                <li>Software Development</li>
                <li>Cloud Computing</li>
                <li>IT Consulting</li>
                <li>Data Analytics</li>
            </ul>
        </div>

    </div>

    <!-- Bottom -->
    <div class="border-t border-gray-400 mt-10 pt-4 text-center text-sm">
        © {{ date('Y') }} Development Catalyst Consultancy Pvt. Ltd. All rights reserved.
    </div>
</footer>
