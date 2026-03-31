@extends('admin.layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">About Page</h2>

@if(session('success'))
<div class="bg-green-500 text-white p-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <input type="text" name="heading" placeholder="Heading"
        value="{{ $about->heading ?? '' }}"
        class="w-full border p-3 rounded">

    <textarea name="description" rows="5"
        class="w-full border p-3 rounded"
        placeholder="Description">{{ $about->description ?? '' }}</textarea>

    <input type="file" name="image" class="w-full">

    <input type="text" name="experience" placeholder="Experience (15+)"
        value="{{ $about->experience ?? '' }}"
        class="w-full border p-3 rounded">

    <input type="text" name="projects" placeholder="Projects (50+)"
        value="{{ $about->projects ?? '' }}"
        class="w-full border p-3 rounded">

    <input type="text" name="experts" placeholder="Experts (60+)"
        value="{{ $about->experts ?? '' }}"
        class="w-full border p-3 rounded">

    <button class="bg-blue-600 text-white px-6 py-2 rounded">
        Save
    </button>

</form>

@endsection
