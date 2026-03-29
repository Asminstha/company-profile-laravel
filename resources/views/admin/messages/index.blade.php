@extends('admin.layouts.app')

@section('content')

<h2 class="text-xl font-bold mb-4">Messages</h2>

<table class="w-full bg-white shadow rounded">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3">Name</th>
            <th class="p-3">Email</th>
            <th class="p-3">Phone</th>
            <th class="p-3">Address</th>
            <th class="p-3">Message</th>
            <th class="p-3">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($messages as $msg)
        <tr class="border-t">
            <td class="p-3">{{ $msg->name }}</td>
            <td class="p-3">{{ $msg->email }}</td>
            <td class="p-3">{{ $msg->phone }}</td>
            <td class="p-3">{{ $msg->address }}</td>
            <td class="p-3">{{ $msg->message }}</td>
            <td class="p-3">
                <form method="POST" action="{{ route('admin.messages.destroy', $msg->id) }}">
                    @csrf @method('DELETE')
                    <button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection
