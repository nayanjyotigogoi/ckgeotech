<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Show All Products
    public function show()
    {
        $products = Product::all(); // Get all products
        return view('admin.product.view', compact('products'));
    }

    // Edit Product content (form with CKEditor)
    public function edit($id)
    {
        // Find the product by ID
        $product = Product::find($id);

        // Check if the product exists
        if (!$product) {
            // Redirect to the products view page with an error message
            return redirect()->route('admin.product.view')->with('error', 'Product not found.');
        }

        // Return the edit view with the product
        return view('admin.product.edit', compact('product'));
    }


    // Update Product content
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'purpose' => 'required|string',
            'how_it_works' => 'required|string',
            'benefits' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('admin.product.view')->with('error', 'Product not found.');
        }

        $product->name = $request->input('name');
        $product->purpose = $request->input('purpose');
        $product->how_it_works = $request->input('how_it_works');
        $product->benefits = $request->input('benefits');

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->save();

        return redirect()->route('admin.product.view')->with('success', 'Product updated successfully.');
    }



    // Add new product
    public function create()
    {
        return view('admin.product.create');
    }

    // ProductController.php

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'purpose' => 'required|string',
            'how_it_works' => 'required|string',
            'benefits' => 'required|string',

        ]);

        $product = new Product;
        $product->name = $request->input('name');
        $product->purpose = $request->input('purpose');
        $product->how_it_works = $request->input('how_it_works');
        $product->benefits = $request->input('benefits');

        $product->save();

        return redirect()->route('admin.product.view')->with('success', 'Product added successfully.');
    }

}
