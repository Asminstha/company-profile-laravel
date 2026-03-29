<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex">

        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white min-h-screen p-5">
            <h2 class="text-xl font-bold mb-6">Admin Panel</h2>

            <ul class="space-y-4">
                <li><a href="/dashboard" class="hover:text-yellow-400">Dashboard</a></li>
                <li><a href="/admin/services" class="hover:text-yellow-400">Services</a></li>
                <li><a href="/admin/products" class="hover:text-yellow-400">Products</a></li>
                <li><a href="/admin/messages" class="hover:text-yellow-400">Messages</a></li>
            </ul>
        </div>

        <!-- Content -->
        <div class="flex-1 p-6">

            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-xl font-bold">Admin Dashboard</h1>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                   <button type="submit"
    class="flex items-center gap-2 px-4 py-2 text-sm font-semibold text-white bg-red-600 border border-red-700 rounded-lg shadow-md hover:bg-red-700 hover:shadow-lg active:scale-95 transition-all duration-200">

    <!-- Logout Icon -->
    <svg xmlns="http://www.w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
    </svg>

    Logout
</button>

                </form>
            </div>

            @yield('content')

        </div>

    </div>

</body>

</html>
