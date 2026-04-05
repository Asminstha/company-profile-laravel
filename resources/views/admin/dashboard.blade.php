@extends('admin.layouts.app')

@section('page_title', 'Dashboard Overview')

@section('content')
<div class="space-y-8">

    <!-- HERO GREETING SECTION -->
    <div class="relative overflow-hidden bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
        <!-- Decorative Background Circle -->
        <div class="absolute -top-24 -right-24 w-64 h-64 bg-blue-50 rounded-full opacity-50"></div>

        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    @php
                        $hour = date('H');
                        $greeting = ($hour < 12) ? 'Good Morning' : (($hour < 17) ? 'Good Afternoon' : 'Good Evening');
                    @endphp
                    {{ $greeting }}, <span class="text-blue-600">{{ explode(' ', auth()->user()->name ?? 'Admin')[0] }}!</span> 👋
                </h1>
                <p class="text-slate-500 mt-1 font-medium">Here is what's happening with your website today.</p>
            </div>

            <div class="flex items-center gap-3">
                <div class="text-right hidden sm:block">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">System Status</p>
                    <p class="text-sm font-semibold text-emerald-500 flex items-center justify-end gap-1">
                        <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span> Online
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- STATS CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- SERVICES CARD -->
        <div class="group bg-white p-1 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-slate-400 uppercase">Total Services</span>
                </div>
                <div class="mt-4">
                    <h3 class="text-3xl font-black text-slate-800">{{ $servicesCount }}</h3>
                    <p class="text-slate-400 text-xs mt-1">Active offerings on site</p>
                </div>
            </div>
        </div>

        <!-- MESSAGES CARD -->
        <div class="group bg-white p-1 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-slate-400 uppercase">Inbox</span>
                </div>
                <div class="mt-4">
                    <h3 class="text-3xl font-black text-slate-800">{{ $messagesCount }}</h3>
                    <p class="text-slate-400 text-xs mt-1">Unread client inquiries</p>
                </div>
            </div>
        </div>

        <!-- QUICK ACTION CARD -->
        <div class="bg-slate-900 p-6 rounded-2xl shadow-xl shadow-slate-200 flex flex-col justify-between">
            <div>
                <h3 class="text-white font-bold">New Content</h3>
                <p class="text-slate-400 text-xs mt-1">Instantly add a new service to your portfolio.</p>
            </div>
            <a href="{{ route('admin.services.create') }}"
                class="mt-4 w-full bg-blue-600 hover:bg-blue-500 text-white text-center py-3 rounded-xl text-sm font-bold transition-all active:scale-95 flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add Service
            </a>
        </div>
    </div>

    <!-- RECENT MESSAGES -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
            <div>
                <h2 class="text-lg font-bold text-slate-800">Recent Messages</h2>
                <p class="text-xs text-slate-500">The last {{ $latestMessages->count() }} messages received</p>
            </div>
            <a href="{{ route('admin.messages.index') }}"
                class="text-xs font-bold text-blue-600 hover:text-blue-700 bg-blue-50 px-4 py-2 rounded-lg transition-colors">
                View All Inbox
            </a>
        </div>

        <div class="divide-y divide-slate-100">
            @forelse($latestMessages as $msg)
                <div class="p-6 hover:bg-slate-50/80 transition-colors group">
                    <div class="flex items-start gap-4">
                        <!-- Avatar Circle -->
                        <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 font-bold text-sm shrink-0 border border-white shadow-sm">
                            {{ strtoupper(substr($msg->name, 0, 1)) }}
                        </div>

                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between">
                                <h4 class="text-sm font-bold text-slate-800 truncate">{{ $msg->name }}</h4>
                                <span class="text-[10px] font-bold text-slate-400 uppercase">{{ $msg->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-xs text-blue-500 font-medium">{{ $msg->email }}</p>
                            <p class="text-sm text-slate-600 mt-2 line-clamp-2 italic leading-relaxed">
                                "{{ $msg->message }}"
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="p-12 text-center">
                    <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4 text-slate-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                    </div>
                    <p class="text-slate-500 text-sm font-medium">No messages in your inbox yet.</p>
                </div>
            @endforelse
        </div>
    </div>

</div>
@endsection
