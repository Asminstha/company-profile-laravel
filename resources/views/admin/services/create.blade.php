@extends('admin.layouts.app')

@section('content')

<h2 class="text-xl font-bold mb-4">Add Service</h2>

<form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
@csrf

<input type="text" name="title" placeholder="Title" class="border p-3 mb-2 w-full ">

<textarea name="description" placeholder="Description" class="border p-3 mb-2 w-full "></textarea>

<input type="file" name="image" class="p-3 mb-2 w-full">
<textarea name="features" class="w-full border p-3 mb-3" placeholder="Features">{{ $service->features ?? '' }}</textarea>

<textarea name="impact" class="w-full border p-3 mb-3" placeholder="Impact">{{ $service->impact ?? '' }}</textarea>

<textarea name="audience" class="w-full border p-3 mb-3" placeholder="Target Audience">{{ $service->audience ?? '' }}</textarea>

<button class="bg-blue-600 text-white px-4 py-2  rounded">Save</button>

</form>

@endsection
