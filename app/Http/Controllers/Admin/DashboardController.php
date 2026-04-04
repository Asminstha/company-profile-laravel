<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        $servicesCount = Service::count();
        $messagesCount = ContactMessage::count();
        $latestMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'servicesCount',
            'messagesCount',
            'latestMessages'
        ));
    }
}
