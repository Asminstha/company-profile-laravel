@extends('admin.layouts.app')

@section('page_title', 'About Page Content')

@section('content')
<div class="max-w-5xl mx-auto pb-20">

    @if (session('success'))
        <div class="flex items-center p-4 mb-6 text-emerald-800 rounded-2xl bg-emerald-50 border border-emerald-100 animate-fade-in-down">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <span class="text-sm font-bold">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <!-- 1. GENERAL INFORMATION & MEDIA -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                <h3 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    General Information
                </h3>
            </div>
            <div class="p-8 space-y-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Main Heading</label>
                    <input type="text" name="heading" value="{{ $about->heading ?? '' }}" placeholder="Headline"
                        class="w-full border-slate-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all rounded-xl p-3">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Description</label>
                    <textarea name="description" rows="4" placeholder="Tell your story..."
                        class="w-full border-slate-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all rounded-xl p-3 resize-none">{{ $about->description ?? '' }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Cover Image</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-2xl hover:bg-slate-50 transition-colors">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-slate-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                            <div class="flex text-sm text-slate-600">
                                <label class="relative cursor-pointer bg-white rounded-md font-bold text-blue-600 hover:text-blue-500">
                                    <span>Upload a file</span>
                                    <input name="image" type="file" class="sr-only">
                                </label>
                                <p class="pl-1 text-slate-500">or drag and drop</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. STATISTICS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <label class="text-xs font-black text-slate-400 uppercase tracking-widest block mb-2">Experience</label>
                <input type="text" name="experience" value="{{ $about->experience ?? '' }}" placeholder="15+"
                    class="w-full border-transparent bg-slate-50 focus:bg-white focus:ring-4 focus:ring-blue-50 rounded-xl p-3 text-lg font-bold">
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <label class="text-xs font-black text-slate-400 uppercase tracking-widest block mb-2">Projects</label>
                <input type="text" name="projects" value="{{ $about->projects ?? '' }}" placeholder="50+"
                    class="w-full border-transparent bg-slate-50 focus:bg-white focus:ring-4 focus:ring-blue-50 rounded-xl p-3 text-lg font-bold">
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <label class="text-xs font-black text-slate-400 uppercase tracking-widest block mb-2">Experts</label>
                <input type="text" name="experts" value="{{ $about->experts ?? '' }}" placeholder="60+"
                    class="w-full border-transparent bg-slate-50 focus:bg-white focus:ring-4 focus:ring-blue-50 rounded-xl p-3 text-lg font-bold">
            </div>
        </div>

        <!-- 3. STRATEGIC PILLARS (Mission, Vision, Goals) -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                <h3 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    Strategic Pillars
                </h3>
            </div>
            <div class="p-8 space-y-10">
                <!-- Mission -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-1"><h4 class="font-bold text-slate-700 uppercase text-xs tracking-tighter">Our Mission</h4></div>
                    <div class="lg:col-span-2 space-y-3">
                        <input name="mission_title" value="{{ $about->mission_title ?? '' }}" placeholder="Mission Title" class="w-full border-slate-200 rounded-xl p-3 font-semibold">
                        <textarea name="mission_desc" rows="3" class="w-full border-slate-200 rounded-xl p-3 text-sm resize-none" placeholder="Description">{{ $about->mission_desc ?? '' }}</textarea>
                    </div>
                </div>
                <hr class="border-slate-100">
                <!-- Vision -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-1"><h4 class="font-bold text-slate-700 uppercase text-xs tracking-tighter">Our Vision</h4></div>
                    <div class="lg:col-span-2 space-y-3">
                        <input name="vision_title" value="{{ $about->vision_title ?? '' }}" placeholder="Vision Title" class="w-full border-slate-200 rounded-xl p-3 font-semibold">
                        <textarea name="vision_desc" rows="3" class="w-full border-slate-200 rounded-xl p-3 text-sm resize-none" placeholder="Description">{{ $about->vision_desc ?? '' }}</textarea>
                    </div>
                </div>
                <hr class="border-slate-100">
                <!-- Goals -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-1"><h4 class="font-bold text-slate-700 uppercase text-xs tracking-tighter">Our Goals</h4></div>
                    <div class="lg:col-span-2 space-y-3">
                        <input name="goals_title" value="{{ $about->goals_title ?? '' }}" placeholder="Goals Title" class="w-full border-slate-200 rounded-xl p-3 font-semibold">
                        <textarea name="goals_desc" rows="3" class="w-full border-slate-200 rounded-xl p-3 text-sm resize-none" placeholder="Description">{{ $about->goals_desc ?? '' }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- STICKY ACTION BAR -->
        <div class=" md:right-12 z-50">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-2xl font-bold shadow-2xl shadow-blue-600/40 transition-all active:scale-95 flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 002-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                Save All Changes
            </button>
        </div>

    </form>
</div>
@endsection
