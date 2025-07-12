<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;   // for directory checks

class GalleryController extends Controller
{

      public function publicGallery()
    {
        $images = Gallery::latest()->take(12)->get();
       return view('index', compact('images'));

    }

     public function loadMore(Request $request)
    {
        $offset = $request->offset ?? 0;
        $images = Gallery::latest()->skip($offset)->take(6)->get();

        $html = '';
        foreach ($images as $image) {
            $html .= '
                <div class="gallery-item">
                    <img src="' . asset('uploads/gallery/' . $image->filename) . '" alt="' . $image->title . '">
                    <div class="gallery-caption">' . $image->title . '</div>
                </div>';
        }

        return response()->json(['html' => $html]);
    }
    /** Display all images */
    public function index()
    {
        $images = Gallery::latest()->paginate(12);
        return view('admin.gallery.view_image', compact('images'));
    }

    /** Show the upload form */
    public function create()
    {
        return view('admin.gallery.add_image');
    }

    /** Handle upload → public/uploads/gallery */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
        ]);

        // --- ensure target folder exists ---
        $destination = public_path('uploads/gallery');
        if (!File::isDirectory($destination)) {
            File::makeDirectory($destination, 0755, true);
        }

        // --- move file ---
        $filename = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move($destination, $filename);

        // --- save DB record ---
        Gallery::create([
            'title' => $data['title'],
            'filename' => $filename,
        ]);

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Image uploaded successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        // update file if new one uploaded
        if ($request->hasFile('image')) {
            // delete old file
            File::delete(public_path('uploads/gallery/' . $gallery->filename));

            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/gallery'), $filename);
            $data['filename'] = $filename;
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Image updated successfully.');
    }


    /** Delete image and record */
    public function destroy(Gallery $gallery)
    {
        $filepath = public_path('uploads/gallery/' . $gallery->filename);

        if (File::exists($filepath)) {
            File::delete($filepath);
        }

        $gallery->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
