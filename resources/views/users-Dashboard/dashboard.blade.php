@extends('users-Dashboard.layouts.app')

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
                    <div class="stat-number" id="total-uploads">5</div>
                    <p class="stat-description">Your contributions</p>
                </div>
            </div>
            {{-- Add other cards similarly --}}
        </div>

        <!-- Upload Section -->
        <div class="upload-section">
            <div class="section-header">
                <h2>My Uploads</h2>
                <button class="btn-primary" id="new-upload-btn">
                    <i class="fas fa-plus"></i> New Upload
                </button>
            </div>

            <!-- Filter Tabs -->
            <div class="filter-tabs">
                <button class="tab-btn active" data-filter="all">All Files</button>
                <button class="tab-btn" data-filter="video">Videos</button>
                <button class="tab-btn" data-filter="image">Images</button>
                <button class="tab-btn" data-filter="document">Documents</button>
            </div>

            <!-- Upload Grid -->
            <div class="upload-grid" id="upload-grid">
                <template id="upload-card-template">
                    <div class="upload-card" data-type="">
                        <div class="upload-preview-container">
                            <img class="upload-preview" src="" alt="File preview" />
                        </div>
                        <div class="upload-info">
                            <h4 class="file-name"></h4>
                            <p class="file-size"></p>
                            <p class="upload-date"></p>
                        </div>
                        <div class="upload-actions">
                            <a class="view-btn" href="#" target="_blank">View</a>
                            <button class="delete-btn">Delete</button>
                            <button class="more-btn">⋮</button>
                            <div class="context-menu hidden">
                                <ul>
                                    <li><a class="view-btn" href="#" target="_blank">View</a></li>
                                    <li><button class="delete-btn">Delete</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </template>
                <div id="uploadsList" class="uploads-list"></div>
            </div>

            <!-- Empty State -->
            <div class="empty-state" id="empty-state" style="display: none;">
                <i class="fas fa-upload"></i>
                <h3>No uploads found</h3>
                <p>Get started by uploading your first file.</p>
            </div>
        </div>
    </main>

    <!-- Upload Modal -->
    <div class="modal-overlay hidden" id="upload-modal">
        <div class="modal">
            <div class="modal-header">
                <h3>Upload New File</h3>
                <button class="modal-close" onclick="closeUploadModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-content">
                <form id="upload-form">
                    <div class="form-group">
                        <label for="file-title">Title</label>
                        <input type="text" id="file-title" placeholder="Enter file title" required>
                    </div>
                    <div class="form-group">
                        <label for="file-description">Description</label>
                        <textarea id="file-description" placeholder="Describe your upload" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file-input">File</label>
                        <input type="file" id="file-input" accept="video/*,image/*,.pdf,.doc,.docx" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn-secondary" onclick="closeUploadModal()">Cancel</button>
                <button class="btn-primary" onclick="handleUpload()">Upload</button>
            </div>
        </div>
    </div>

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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const uploadModal = document.getElementById('upload-modal');
        const openUploadBtn = document.getElementById('new-upload-btn');
        const closeUploadBtn = document.querySelector('.modal-close');
        const filterButtons = document.querySelectorAll('[data-filter]');
        const uploadCards = document.querySelectorAll('.upload-card');
        const emptyState = document.getElementById('empty-state');

        // Show Modal
        openUploadBtn?.addEventListener('click', () => {
            uploadModal.classList.remove('hidden');
        });

        // Close Modal
        closeUploadBtn?.addEventListener('click', () => {
            uploadModal.classList.add('hidden');
        });

        // Filtering logic
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const selectedType = button.getAttribute('data-filter');
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                let visibleCount = 0;
                uploadCards.forEach(card => {
                    const type = card.getAttribute('data-type');
                    if (selectedType === 'all' || type === selectedType) {
                        card.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        card.classList.add('hidden');
                    }
                });

                emptyState.style.display = visibleCount === 0 ? 'flex' : 'none';
            });
        });

        // Initial trigger
        document.querySelector('[data-filter].active')?.click();
    });
</script>
@endpush
