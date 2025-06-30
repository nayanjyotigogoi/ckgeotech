@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Add New Project</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                <!-- Project Name -->
<div class="mb-3">
    <label for="name" class="form-label">Project Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name ?? '') }}" required>
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


                    <!-- Project Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Project Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Project Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Project Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="complete">Complete</option>
                            <option value="running">Running</option>
                            <option value="upcoming">Upcoming</option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Project Image -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Project Image</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <button type="submit" class="btn btn-success">Save Project</button>
                    <a href="{{ route('admin.project.view') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </section>
        </main>
    </div>
@endsection
