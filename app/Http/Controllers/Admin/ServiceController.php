<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

  public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'features' => 'nullable',
        'impact' => 'nullable',
        'audience' => 'nullable',
        'image' => 'nullable|image|mimes:jpg,png,jpeg'
    ]);

    $imageName = null;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/services'), $imageName);
    }

    Service::create([
        'title' => $request->title,
        'description' => $request->description,
        'features' => $request->features,
        'impact' => $request->impact,
        'audience' => $request->audience,
        'image' => $imageName,
    ]);

    return redirect()->route('admin.services.index')->with('success', 'Service Added');
}
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

  public function update(Request $request, Service $service)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'features' => 'nullable',
        'impact' => 'nullable',
        'audience' => 'nullable',
        'image' => 'nullable|image|mimes:jpg,png,jpeg'
    ]);

    $imageName = $service->image;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/services'), $imageName);
    }

    $service->update([
        'title' => $request->title,
        'description' => $request->description,
        'features' => $request->features,
        'impact' => $request->impact,
        'audience' => $request->audience,
        'image' => $imageName,
    ]);

    return redirect()->route('admin.services.index')->with('success', 'Updated');
}
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Deleted');
    }
}
