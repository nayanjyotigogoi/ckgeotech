@extends('users-Dashboard.layouts.app')
@section('css')

<style>
    .small-swal-popup {
        width: 300px !important;
        padding: 1.2rem 1.5rem;
    }

    .small-swal-title {
        font-size: 1rem !important;
    }

    .small-swal-text {
        font-size: 0.85rem !important;
    }
</style>
@endsection

@section('content')
<!-- Main Content -->
<main class="main-content">

    <!-- Stats Cards -->
    <div class="stats-grid">
        {{-- Repeat cards --}}
        <div class="stat-card">
            <div class="stat-header">
                <span class="stat-title">Total Uploads</span>
                <i class="fas fa-upload"></i>
            </div>
            <div class="stat-content">
                <div class="stat-number" id="total-uploads">{{$uploadCount}}</div>
                <p class="stat-description">Your contributions</p>
            </div>
        </div>
        {{-- Add other cards similarly --}}
    </div>

    <!-- Upload Section -->
    <div class="upload-section">
        <div class="section-header">
            <h2>My Uploads</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                <i class="fas fa-plus"></i> New Upload
            </button>
        </div>

        <!-- Filter Tabs -->
        <!-- Filter Tabs -->
        <div class="filter-tabs mb-4">
            <button class="tab-btn active" data-filter="all">All Files</button>
            <button class="tab-btn" data-filter="video">Videos</button>
            <button class="tab-btn" data-filter="image">Images</button>
            <button class="tab-btn" data-filter="document">Documents</button>
        </div>

        <!-- Upload Grid -->
        <div class="upload-grid" id="upload-grid">
            @forelse($uploads as $upload)
            <div class="upload-card big-card" data-type="{{ $upload->type }}">
                <div class="upload-preview-container">
                    @if($upload->type === 'image')
                    <img class="upload-preview" src="{{ asset('uploads/' . $upload->user_id . '/' . $upload->file_name) }}" alt="Image">
                    @elseif($upload->type === 'video')
                    <video class="upload-preview" controls>
                        <source src="{{ asset('uploads/' . $upload->user_id . '/' . $upload->file_name) }}" type="video/mp4">
                        Your browser does not support video.
                    </video>
                    @else
                    <a href="{{ asset('uploads/' . $upload->user_id . '/' . $upload->file_name) }}" class="document-link" target="_blank">
                        📄 {{ $upload->title }}
                    </a>
                    @endif
                </div>
                <div class="upload-info mt-2">
                    <h5 class="file-name mb-1">{{ Str::limit($upload->title, 30) }}</h5>
                    <small class="text-muted">{{ \Carbon\Carbon::parse($upload->created_at)->format('d M Y') }}</small>
                </div>
            </div>
            @empty
            <div class="empty-state" id="empty-state">
                <i class="fas fa-upload"></i>
                <h3>No uploads found</h3>
                <p>Get started by uploading your first file.</p>
            </div>
            @endforelse
        </div>


    </div>

    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload New File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('upload-files')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="file-type">File Type</label>
                            <select id="file-type" name="type" class="form-control" required>
                                <option value="">Select type</option>
                                <option value="video">Video</option>
                                <option value="image">Image</option>
                                <option value="document">Document</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="file-title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="file-title" name="title" placeholder="Enter file title" required>
                            <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                        </div>
                        <div class="mb-3">
                            <label for="file-description" class="form-label">Description</label>
                            <textarea class="form-control" id="file-description" rows="3" name="description" placeholder="Describe your upload"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="file-input" class="form-label">File</label>
                            <input class="form-control" type="file" name="file" id="file-input" accept="video/*,image/*,.pdf,.doc,.docx" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>


<!-- Context Menu -->
<div class="context-menu" id="context-menu">
    <div class="context-item" onclick="viewFile()">
        <i class="fas fa-eye"></i> View
    </div>
    <div class="context-item" onclick="editFile()">
        <i class="fas fa-edit"></i> Edit
    </div>
    <div class="context-item delete" onclick="deleteFile()">
        <i class="fas fa-trash"></i> Delete
    </div>
</div>
@endsection
@section('js')
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if(session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('
        success ') }}',
        customClass: {
            popup: 'small-swal-popup',
            title: 'small-swal-title',
            htmlContainer: 'small-swal-text'
        },
        confirmButtonColor: '#3085d6'
    });
    @endif

    @if(session('error'))
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '{{ session('
        error ') }}',
        customClass: {
            popup: 'small-swal-popup',
            title: 'small-swal-title',
            htmlContainer: 'small-swal-text'
        },
        confirmButtonColor: '#d33'
    });
    @endif
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const uploadCards = document.querySelectorAll('.upload-card');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');

                tabButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                uploadCards.forEach(card => {
                    const type = card.getAttribute('data-type');

                    if (filter === 'all' || type === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>

@endsection
