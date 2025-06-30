<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
{
    $about = About::first(); // Fetch content from DB
    return view('about', compact('about')); // Return your main frontend about view
}

    public function show()
    {
        $about = About::first();
        return view('admin.about.view', compact('about'));
    }

    public function edit()
    {
        $about = About::first();
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $about = About::first();

        if (!$about) {
            $about = new About();
        }

        $about->content = $request->input('content');
        $about->save();

        return redirect()->route('admin.about.view')->with('success', 'About content updated successfully.');
    }
}
