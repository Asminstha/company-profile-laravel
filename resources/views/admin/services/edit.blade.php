@extends('admin.layouts.app')

@section('content')
    <div class="w-full mx-auto mt-10 bg-white p-8 rounded-xl shadow-md border border-slate-200">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-slate-800">Edit Service</h2>
            <p class="text-slate-500 text-sm">Update the details and image for this service.</p>
        </div>

        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Service Title</label>
                <input type="text" name="title" value="{{ old('title', $service->title) }}" required
                    placeholder="e.g. Premium Web Design"
                    class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Description</label>
                <textarea name="description" rows="4" placeholder="Write a brief overview..."
                    class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">{{ old('description', $service->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Service Image</label>

                @if ($service->image)
                    <div class="mb-3 inline-block p-1 border border-slate-200 rounded-lg bg-slate-50 text-center">
                        <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Current</p>
                        <img src="{{ asset('uploads/services/' . $service->image) }}"
                            class="w-32 h-20 object-cover rounded-md shadow-sm">
                    </div>
                @endif

                <input type="file" name="image"
                    class="block w-full text-sm text-slate-500
                          file:mr-4 file:py-2 file:px-4
                          file:rounded-full file:border-0
                          file:text-sm file:font-semibold
                          file:bg-indigo-50 file:text-indigo-700
                          hover:file:bg-indigo-100 transition-all cursor-pointer">
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Features -->
<div>
    <label class="block text-sm font-semibold text-slate-700 mb-2">Features</label>
    <textarea name="features" rows="3"
        class="w-full px-4 py-2 border rounded-lg">{{ old('features', $service->features) }}</textarea>
</div>

<!-- Impact -->
<div>
    <label class="block text-sm font-semibold text-slate-700 mb-2">Impact</label>
    <textarea name="impact" rows="3"
        class="w-full px-4 py-2 border rounded-lg">{{ old('impact', $service->impact) }}</textarea>
</div>

<!-- Audience -->
<div>
    <label class="block text-sm font-semibold text-slate-700 mb-2">Target Audience</label>
    <textarea name="audience" rows="3"
        class="w-full px-4 py-2 border rounded-lg">{{ old('audience', $service->audience) }}</textarea>
</div>
            <!-- Submit Button -->
            <div class="pt-4">
    <button type="submit"
        class="w-full bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-3 px-4 rounded-lg shadow-lg shadow-indigo-200 transition-all duration-300 ease-in-out transform hover:-translate-y-1 active:scale-95">
        Update Service
    </button>

    <a href="{{ url()->previous() }}"
        class="block text-center text-sm font-medium text-slate-500 mt-4 hover:text-indigo-600 transition-colors">
        Cancel and Go Back
    </a>
</div>

        </form>
    </div>
@endsection
