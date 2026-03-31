@extends('admin.layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-6">About Page</h2>

    @if (session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <input type="text" name="heading" placeholder="Heading" value="{{ $about->heading ?? '' }}"
            class="w-full border p-3 mb-2 rounded">

        <textarea name="description" rows="5" class="w-full border p-3 rounded" placeholder="Description">{{ $about->description ?? '' }}</textarea>

        <input type="file" name="image" class="w-full p-3 mb-2">

        <input type="text" name="experience" placeholder="Experience (15+)" value="{{ $about->experience ?? '' }}"
            class="w-full border p-3 mb-2 rounded">

        <input type="text" name="projects" placeholder="Projects (50+)" value="{{ $about->projects ?? '' }}"
            class="w-full border p-3 mb-2 rounded">

        <input type="text" name="experts" placeholder="Experts (60+)" value="{{ $about->experts ?? '' }}"
            class="w-full border p-3 mb-2 rounded">


        <h3 class="font-bold mt-6">Mission</h3>

        <input name="mission_title" value="{{ $about->mission_title ?? '' }}" placeholder="Mission Title"
            class="w-full border p-3 mb-2 rounded">

        <textarea name="mission_desc" class="w-full border p-3 mb-3 rounded" placeholder="Mission Description">{{ $about->mission_desc ?? '' }}</textarea>


        <h3 class="font-bold mt-6">Vision</h3>

        <input name="vision_title" value="{{ $about->vision_title ?? '' }}" placeholder="Vision Title"
            class="w-full border p-3 mb-2 rounded">

        <textarea name="vision_desc" class="w-full border p-3 mb-3 rounded" placeholder="Vision Description">{{ $about->vision_desc ?? '' }}</textarea>


        <h3 class="font-bold mt-6">Goals</h3>

        <input name="goals_title" value="{{ $about->goals_title ?? '' }}" placeholder="Goals Title"
            class="w-full border p-3 mb-2 rounded">

        <textarea name="goals_desc" class="w-full border p-3 mb-3 rounded" placeholder="Goals Description">{{ $about->goals_desc ?? '' }}</textarea>


        <button class="bg-blue-600 text-white px-6 py-2 rounded">
            Save
        </button>

    </form>
@endsection
