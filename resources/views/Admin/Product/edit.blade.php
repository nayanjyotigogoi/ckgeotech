@extends('layouts.admin.admin_app')

@section('content')
<div class="container">
    <main id="main" class="main">
        <section class="section">
            <h2>Edit Product Info</h2>
            <!-- Include the product id in the action -->
            <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="mb-4">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="purpose" class="form-label">Purpose</label>
                    <textarea name="purpose" id="purpose" class="form-control" rows="4">{{ old('purpose', $product->purpose) }}</textarea>
                    @error('purpose')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="how_it_works" class="form-label">How It Works</label>
                    <textarea name="how_it_works" id="how_it_works" class="form-control" rows="4">{{ old('how_it_works', $product->how_it_works) }}</textarea>
                    @error('how_it_works')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="benefits" class="form-label">Benefits</label>
                    <textarea name="benefits" id="benefits" class="form-control" rows="4">{{ old('benefits', $product->benefits) }}</textarea>
                    @error('benefits')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    @if($product->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/'.$product->image) }}" alt="Product Image" width="150px">
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.product.view') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </section>
    </main>
</div>

<!-- CKEditor Setup for "how_it_works" and "benefits" -->
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('how_it_works', {
        customConfig: "{{ asset('ckeditor/config.js') }}",
        filebrowserUploadMethod: 'form',
        allowedContent: true,
        extraAllowedContent: 'i(*)[*]',
        height: '300px',
        width: '100%'
    });

    CKEDITOR.replace('benefits', {
        customConfig: "{{ asset('ckeditor/config.js') }}",
        filebrowserUploadMethod: 'form',
        allowedContent: true,
        extraAllowedContent: 'i(*)[*]',
        height: '300px',
        width: '100%'
    });
</script>
@endsection
