@extends('admin.layouts.app')

@section('content')

<h2 class="text-xl font-bold mb-6">Edit About Page</h2>

@if(session('success'))
    <div class="bg-green-100 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="{{ route('admin.about.update') }}" enctype="multipart/form-data">
@csrf

<input name="title" value="{{ $about->title ?? '' }}" placeholder="Title" class="w-full border p-3 mb-3">

<textarea name="description" required
    class="w-full border p-2 rounded h-32">{{ old('description', $about->description ?? '') }}</textarea>

<h3 class="font-bold mt-4">Stats</h3>

<input name="years_experience" value="{{ $about->years_experience ?? '' }}" placeholder="Years Experience" class="w-full border p-3 mb-2">
<input name="projects_completed" value="{{ $about->projects_completed ?? '' }}" placeholder="Projects" class="w-full border p-3 mb-2">
<input name="experts" value="{{ $about->experts ?? '' }}" placeholder="Experts" class="w-full border p-3 mb-2">

<h3 class="font-bold mt-4">Mission</h3>
<input name="mission_title" value="{{ $about->mission_title ?? '' }}" class="w-full border p-2 mb-2">
<textarea name="mission_desc" class="w-full border p-2 mb-2">{{ $about->mission_desc ?? '' }}</textarea>

<h3 class="font-bold mt-4">Vision</h3>
<input name="vision_title" value="{{ $about->vision_title ?? '' }}" class="w-full border p-2 mb-2">
<textarea name="vision_desc" class="w-full border p-2 mb-2">{{ $about->vision_desc ?? '' }}</textarea>

<h3 class="font-bold mt-4">Goals</h3>
<input name="goals_title" value="{{ $about->goals_title ?? '' }}" class="w-full border p-2 mb-2">
<textarea name="goals_desc" class="w-full border p-2 mb-2">{{ $about->goals_desc ?? '' }}</textarea>

<h3 class="font-bold mt-4">Image</h3>
<input type="file" name="image" class="mb-4">

<button class="bg-blue-600 text-white px-6 py-3 rounded">Save</button>

</form>

@endsection
