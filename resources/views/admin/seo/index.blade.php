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

  <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-2xl font-bold shadow-2xl shadow-blue-600/40 transition-all active:scale-95 flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 002-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                Save All Changes
            </button>

</form>

@endsection
