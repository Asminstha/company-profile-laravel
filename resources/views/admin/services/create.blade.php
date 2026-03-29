@extends('admin.layouts.app')

@section('content')

<h2 class="text-xl font-bold mb-4">Add Service</h2>

<form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
@csrf

<input type="text" name="title" placeholder="Title" class="border p-2 w-full mb-3">

<textarea name="description" placeholder="Description" class="border p-2 w-full mb-3"></textarea>

<input type="file" name="image" class="mb-3">

<button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>

</form>

@endsection
