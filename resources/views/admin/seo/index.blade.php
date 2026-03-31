@extends('admin.layouts.app')

@section('content')

<h2 class="text-xl font-bold mb-6">SEO Settings</h2>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="{{ route('admin.seo.update') }}">
    @csrf

    @foreach($pages as $page)

        <div class="mb-8 p-4 bg-white shadow rounded">
            <h3 class="font-bold mb-3 capitalize">{{ $page }} Page</h3>

            <input type="text"
                name="pages[{{ $page }}][meta_title]"
                value="{{ $seo[$page]->meta_title ?? '' }}"
                placeholder="Meta Title"
                class="w-full border p-3 mb-2  rounded ">

            <textarea
                name="pages[{{ $page }}][meta_description]"
                placeholder="Meta Description"
                class="w-full border p-3 rounded"
                rows="3">{{ $seo[$page]->meta_description ?? '' }}</textarea>

        </div>

    @endforeach

    <button class="bg-blue-600 text-white px-6 py-3 rounded">
        Save SEO
    </button>

</form>

@endsection
