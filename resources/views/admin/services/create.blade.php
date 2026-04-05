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
 <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-2xl font-bold shadow-2xl shadow-blue-600/40 transition-all active:scale-95 flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 002-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                Save All Changes
            </button>

</form>

@endsection
