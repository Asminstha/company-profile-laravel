<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;

class AboutController extends Controller
{
    public function index()
    {
        $about = AboutPage::first();
        return view('admin.about.index', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'experience' => 'required',
            'projects' => 'required',
            'experts' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        $about = AboutPage::first();

        $imageName = $about->image ?? null;

        // IMAGE UPLOAD
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/about'), $imageName);
        }

        $data = [
            'heading' => $request->heading,
            'description' => $request->description,
            'experience' => $request->experience,
            'projects' => $request->projects,
            'experts' => $request->experts,

             'mission_title' => $request->mission_title,
    'mission_desc' => $request->mission_desc,

    'vision_title' => $request->vision_title,
    'vision_desc' => $request->vision_desc,

    'goals_title' => $request->goals_title,
    'goals_desc' => $request->goals_desc,
    
            'image' => $imageName,
        ];

        if (!$about) {
            AboutPage::create($data);
        } else {
            $about->update($data);
        }

        return redirect()->back()->with('success', 'About Updated Successfully');
    }
}
