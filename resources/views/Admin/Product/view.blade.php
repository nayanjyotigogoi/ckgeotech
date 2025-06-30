@extends('layouts.admin.admin_app')

@section('content')
<div class="container">
    <main id="main" class="main">
        <section class="section">
            <h2>View Products</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-3">
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Add New Product</a>
            </div>

            @if($products->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Purpose</th>
                            <th>How It Works</th>
                            <th>Benefits</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->purpose }}</td>
                                <td>{{ $product->how_it_works }}</td>
                                <td>{{ $product->benefits }}</td>
                                <td>
                                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <!-- Optional: Add Delete Button -->
                                    <!-- <a href="#" class="btn btn-danger btn-sm">Delete</a> -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No products available.</p>
            @endif
        </section>
    </main>
</div>
@endsection
