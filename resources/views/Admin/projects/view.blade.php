@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Projects List</h2>
                <a href="{{ route('admin.project.create') }}" class="btn btn-primary mb-3">+ Add Project</a>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>
                                  <img src="{{ asset($project->image) }}" alt="Project Image" width="100px">
                                </td>
                                <td>{{ $project->name }}</td>
                                <td>{{ ucfirst($project->status) }}</td>
                                <td>{{ Str::limit($project->description, 100) }}</td>
                                <td>
                                    <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('admin.project.delete', $project->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Delete this project?')" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </main>
    </div>
@endsection
