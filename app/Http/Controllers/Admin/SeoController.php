<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoSetting;

class SeoController extends Controller
{
    public function index()
    {
        $pages = ['home', 'about', 'services', 'contact'];

        $seo = SeoSetting::all()->keyBy('page');

        return view('admin.seo.index', compact('pages', 'seo'));
    }

    public function update(Request $request)
    {
        foreach ($request->pages as $page => $data) {

            SeoSetting::updateOrCreate(
                ['page' => $page],
                [
                    'meta_title' => $data['meta_title'],
                    'meta_description' => $data['meta_description'],
                ]
            );
        }

        return back()->with('success', 'SEO Updated');
    }
}
