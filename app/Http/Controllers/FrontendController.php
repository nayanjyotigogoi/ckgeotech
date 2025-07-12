<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Project;
class FrontendController extends Controller
{
    public function index()
    {
        // Fetch all active projects and products (modify filters if needed)
        $projects = Project::latest()->get();
        $products = Product::latest()->get();
        $images = Gallery::latest()->take(12)->get();

        return view('index', compact('projects', 'products', 'images'));
    }

    // public function publicGallery()
    // {
    //     $images = Gallery::latest()->take(12)->get();
    //    return view('index', compact('images'));

    // }

    // public function loadMore(Request $request)
    // {
    //     $offset = $request->offset ?? 0;
    //     $images = Gallery::latest()->skip($offset)->take(6)->get();

    //     $html = '';
    //     foreach ($images as $image) {
    //         $html .= '
    //             <div class="gallery-item">
    //                 <img src="' . asset('uploads/gallery/' . $image->filename) . '" alt="' . $image->title . '">
    //                 <div class="gallery-caption">' . $image->title . '</div>
    //             </div>';
    //     }

    //     return response()->json(['html' => $html]);
    // }
}
