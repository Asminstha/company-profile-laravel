<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;

use App\Models\AboutPage;


class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->take(6)->get();

        return view('frontend.home', compact('services'));
    }


    public function about()
    {
        $about = AboutPage::first();
        return view('frontend.about', compact('about'));
    }
}
