@extends('admin.layouts.app')

@section('content')
    <div class="flex justify-between mb-4">
        <h2 class="text-xl font-bold">Services</h2>
        <a href="{{ route('admin.services.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Service</a>
    </div>

    <div class="w-full bg-white shadow-lg rounded-xl overflow-hidden border border-slate-200">
        <!-- Horizontal Scroll Wrapper -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse border-spacing-y-2">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr>
                        <th class="p-4 text-sm font-semibold text-slate-700 w-24">Image</th>
                        <th class="p-4 text-sm font-semibold text-slate-700 min-w-[150px]">Title</th>
                        <th class="p-4 text-sm font-semibold text-slate-700 min-w-[300px]">Description</th>
                        <th class="p-4 text-sm font-semibold text-slate-700 text-center">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">
                    @foreach ($services as $service)
                        <tr class="hover:bg-slate-50/50 transition-colors">

                            <!-- Image -->
                            <td class="p-4">
                                @if ($service->image)
                                    <img src="/uploads/services/{{ $service->image }}"
                                        class="h-12 w-16 object-cover rounded-lg shadow-sm border border-slate-200">
                                @else
                                    <div
                                        class="h-12 w-16 bg-slate-100 rounded-lg flex items-center justify-center text-[10px] text-slate-400 font-bold uppercase">
                                        No Img</div>
                                @endif
                            </td>

                            <!-- Title: Limited width with truncation -->
                            <td class="p-4 ">
                                <div class="text-sm font-bold text-slate-800 truncate max-w-[150px]"
                                    title="{{ $service->title }}">
                                    {{ $service->title }}
                                </div>
                            </td>


                            <!-- Description: Scrollable inside the cell -->
                            <td class="p-4">
                                <div
                                    class="text-sm text-slate-600 max-h-20 overflow-y-auto custom-scrollbar pr-2 leading-relaxed min-w-[250px]">
                                    {{ $service->description }}
                                </div>
                            </td>

                            <!-- Actions -->
                            <td class="p-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.services.edit', $service->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-amber-50 text-amber-600 hover:bg-amber-600 hover:text-white rounded-md text-xs font-bold transition-all border border-amber-100">
                                        Edit
                                    </a>

                                    <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}"
                                        onsubmit="return confirm('Delete this service?')">
                                        @csrf @method('DELETE')
                                        <button
                                            class="inline-flex items-center px-3 py-1.5 bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white rounded-md text-xs font-bold transition-all border border-rose-100">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
