<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
       $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|max:255',
    'phone' => ['nullable', 'regex:/^(98|97)\d{8}$/'],
    'message' => 'required|min:5',
        ]);

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Message sent successfully!');
    }
}
