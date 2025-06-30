@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Edit Project Info</h2>
                <!-- Include the project id in the action -->
                <form action="{{ route('admin.project.update', $project->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">Project Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name', $project->name) }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Project Description</label>
                        <textarea name="description" id="description" class="form-control"
                            rows="4">{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="status" class="form-label">Project Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="complete" {{ $project->status == 'complete' ? 'selected' : '' }}>Complete</option>
                            <option value="running" {{ $project->status == 'running' ? 'selected' : '' }}>Running</option>
                            <option value="upcoming" {{ $project->status == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image" class="form-label">Project Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        @if($project->image && file_exists(public_path($project->image)))
                            <div class="mt-2">
                                <img src="{{ asset($project->image) }}" alt="Project Image" width="150px">
                            </div>


                        @endif
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ route('admin.project.view') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </section>
        </main>
    </div>

    <!-- CKEditor Setup for Project Description -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description', {
            customConfig: "{{ asset('ckeditor/config.js') }}",
            filebrowserUploadMethod: 'form',
            allowedContent: true,
            extraAllowedContent: 'i(*)[*]',
            height: '300px',
            width: '100%'
        });
    </script>
@endsection