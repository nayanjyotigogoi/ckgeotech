@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Add New Product</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('admin.product.store') }}" method="POST">
                    @csrf

                    <!-- Title Input -->
                    <!-- Title Input -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <!-- Purpose Input -->
                    <div class="mb-3">
                        <label for="purpose" class="form-label">Purpose</label>
                        <textarea class="form-control" id="purpose" name="purpose" rows="4" required></textarea>
                        @error('purpose')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- How It Works Input -->
                    <div class="mb-3">
                        <label for="how_it_works" class="form-label">How It Works</label>
                        <textarea class="form-control" id="how_it_works" name="how_it_works" rows="4" required></textarea>
                        @error('how_it_works')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Benefits Input -->
                    <div class="mb-3">
                        <label for="benefits" class="form-label">Benefits</label>
                        <textarea class="form-control" id="benefits" name="benefits" rows="4" required></textarea>
                        @error('benefits')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>





                    <button type="submit" class="btn btn-success">Save Product</button>
                    <a href="{{ route('admin.product.view') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </section>
        </main>
    </div>

@endsection