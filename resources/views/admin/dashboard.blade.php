@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    <!-- HEADER -->
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
        <p class="text-gray-500 text-sm">Welcome back, Admin 👋</p>
    </div>

    <!-- STATS CARDS -->
   <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- SERVICES -->
    <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-6 rounded-xl shadow-lg">
        <h3 class="text-sm opacity-80">Total Services</h3>
        <p class="text-3xl font-bold mt-2">{{ $servicesCount }}</p>
    </div>

    <!-- MESSAGES -->
    <div class="bg-gradient-to-r from-green-500 to-green-700 text-white p-6 rounded-xl shadow-lg">
        <h3 class="text-sm opacity-80">Messages</h3>
        <p class="text-3xl font-bold mt-2">{{ $messagesCount }}</p>
    </div>

    <!-- QUICK ACTION -->
    <div class="bg-gradient-to-r from-purple-500 to-purple-700 text-white p-6 rounded-xl shadow-lg">
        <h3 class="text-sm opacity-80">Quick Action</h3>

        <a href="{{ route('admin.services.create') }}"
            class="inline-block mt-3 bg-white text-purple-700 px-4 py-2 rounded text-sm font-semibold">
            + Add Service
        </a>
    </div>

</div>
    <!-- RECENT MESSAGES -->
    <div class="bg-white p-6 rounded-xl shadow border">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Recent Messages</h2>

            <a href="{{ route('admin.messages.index') }}"
                class="text-blue-600 text-sm hover:underline">
                View All
            </a>
        </div>

        @if($latestMessages->count() > 0)

            <div class="space-y-4">

                @foreach($latestMessages as $msg)
                    <div class="border rounded-lg p-4 hover:bg-gray-50 transition">

                        <div class="flex justify-between items-center">
                            <h4 class="font-semibold text-gray-800">
                                {{ $msg->name }}
                            </h4>

                            <span class="text-xs text-gray-400">
                                {{ $msg->created_at->diffForHumans() }}
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 mt-1">
                            {{ $msg->email }}
                        </p>

                        <p class="text-sm text-gray-500 mt-2 line-clamp-2">
                            {{ $msg->message }}
                        </p>

                    </div>
                @endforeach

            </div>

        @else
            <p class="text-gray-500 text-sm">No messages yet.</p>
        @endif

    </div>

</div>

@endsection
