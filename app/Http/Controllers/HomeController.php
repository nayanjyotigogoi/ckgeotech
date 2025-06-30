<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Project;
class HomeController extends Controller
{
     public function index()
    {
        // Fetch all active projects and products (modify filters if needed)
        $projects = Project::latest()->get();
        $products = Product::latest()->get();

        return view('index', compact('projects', 'products'));
    }
}
