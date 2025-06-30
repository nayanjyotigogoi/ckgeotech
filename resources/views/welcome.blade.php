<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CK GEO TECH - Project Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background-color: #f9fafb;
      color: #111827;
      line-height: 1.5;
    }

    /* Header Styles */
    .header {
      background: white;
      border-bottom: 1px solid #e5e7eb;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .header-container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header-left {
      display: flex;
      align-items: center;
    }

    .logo-section {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .logo {
      width: 2rem;
      height: 2rem;
      background: #2563eb;
      border-radius: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      font-size: 0.875rem;
    }

    .company-info h1 {
      font-size: 1.25rem;
      font-weight: 600;
      color: #111827;
    }

    .company-info p {
      font-size: 0.875rem;
      color: #6b7280;
    }

    .header-right {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .project-info {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.875rem;
      color: #6b7280;
    }

    .user-avatar {
      width: 2rem;
      height: 2rem;
      background: #e5e7eb;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 500;
      font-size: 0.875rem;
    }

    /* Main Content */
    .main-content {
      max-width: 1280px;
      margin: 0 auto;
      padding: 2rem;
    }

    /* Stats Grid */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .stat-card {
      background: white;
      border: 1px solid #e5e7eb;
      border-radius: 0.5rem;
      padding: 1.5rem;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .stat-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 0.5rem;
    }

    .stat-title {
      font-size: 0.875rem;
      font-weight: 500;
      color: #6b7280;
    }

    .stat-header i {
      color: #9ca3af;
    }

    .stat-number {
      font-size: 2rem;
      font-weight: bold;
      color: #111827;
    }

    .stat-description {
      font-size: 0.75rem;
      color: #6b7280;
    }

    /* Upload Section */
    .upload-section {
      margin-bottom: 2rem;
    }

    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1rem;
    }

    .section-header h2 {
      font-size: 1.125rem;
      font-weight: 600;
      color: #111827;
    }

    /* Buttons */
    .btn-primary {
      background: #2563eb;
      color: white;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
      font-size: 0.875rem;
      font-weight: 500;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      transition: background-color 0.2s;
    }

    .btn-primary:hover {
      background: #1d4ed8;
    }

    .btn-secondary {
      background: white;
      color: #374151;
      border: 1px solid #d1d5db;
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
      font-size: 0.875rem;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .btn-secondary:hover {
      background: #f9fafb;
    }

    /* Filter Tabs */
    .filter-tabs {
      display: flex;
      gap: 0.25rem;
      margin-bottom: 1.5rem;
      background: #f3f4f6;
      padding: 0.25rem;
      border-radius: 0.375rem;
      width: fit-content;
    }

    .tab-btn {
      background: transparent;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 0.25rem;
      font-size: 0.875rem;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.2s;
      color: #6b7280;
    }

    .tab-btn.active {
      background: white;
      color: #111827;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .tab-btn:hover:not(.active) {
      color: #374151;
    }

    /* Upload Grid */
    .upload-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 1.5rem;
    }

    .upload-card {
      background: white;
      border: 1px solid #e5e7eb;
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.2s;
    }

    .upload-card:hover {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .upload-thumbnail {
      position: relative;
      aspect-ratio: 16/9;
      background: #f3f4f6;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .upload-thumbnail img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .upload-thumbnail i {
      font-size: 2rem;
      color: #9ca3af;
    }

    .file-badge {
      position: absolute;
      top: 0.5rem;
      left: 0.5rem;
      padding: 0.25rem 0.5rem;
      border-radius: 0.25rem;
      font-size: 0.75rem;
      font-weight: 500;
      text-transform: capitalize;
    }

    .badge-video {
      background: #dbeafe;
      color: #1e40af;
    }

    .badge-image {
      background: #dcfce7;
      color: #166534;
    }

    .badge-document {
      background: #f3e8ff;
      color: #7c3aed;
    }

    .upload-actions {
      position: absolute;
      top: 0.5rem;
      right: 0.5rem;
    }

    .action-btn {
      background: rgba(255, 255, 255, 0.9);
      border: none;
      width: 2rem;
      height: 2rem;
      border-radius: 0.25rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background-color 0.2s;
    }

    .action-btn:hover {
      background: white;
    }

    .upload-content {
      padding: 1rem;
    }

    .upload-title {
      font-size: 1rem;
      font-weight: 600;
      color: #111827;
      margin-bottom: 0.5rem;
      display: -webkit-box;
      -webkit-line-clamp: 1;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .upload-description {
      font-size: 0.875rem;
      color: #6b7280;
      margin-bottom: 1rem;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .upload-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.875rem;
      color: #6b7280;
      margin-bottom: 0.5rem;
    }

    .upload-date {
      display: flex;
      align-items: center;
      gap: 0.25rem;
    }

    .upload-filename {
      font-size: 0.75rem;
      color: #9ca3af;
    }

    /* Empty State */
    .empty-state {
      text-align: center;
      padding: 3rem;
    }

    .empty-state i {
      font-size: 3rem;
      color: #9ca3af;
      margin-bottom: 1rem;
    }

    .empty-state h3 {
      font-size: 0.875rem;
      font-weight: 500;
      color: #111827;
      margin-bottom: 0.25rem;
    }

    .empty-state p {
      font-size: 0.875rem;
      color: #6b7280;
      margin-bottom: 1.5rem;
    }

    /* Modal Styles */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 1000;
    }

    .modal-overlay.active {
      display: flex;
    }

    .modal {
      background: white;
      border-radius: 0.5rem;
      width: 90%;
      max-width: 425px;
      max-height: 90vh;
      overflow: hidden;
    }

    .modal-header {
      padding: 1.5rem;
      border-bottom: 1px solid #e5e7eb;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .modal-header h3 {
      font-size: 1.125rem;
      font-weight: 600;
      color: #111827;
    }

    .modal-close {
      background: none;
      border: none;
      font-size: 1.25rem;
      cursor: pointer;
      color: #6b7280;
      padding: 0.25rem;
    }

    .modal-content {
      padding: 1.5rem;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      font-size: 0.875rem;
      font-weight: 500;
      color: #374151;
      margin-bottom: 0.5rem;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 0.5rem 0.75rem;
      border: 1px solid #d1d5db;
      border-radius: 0.375rem;
      font-size: 0.875rem;
      transition: border-color 0.2s;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: #2563eb;
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .modal-footer {
      padding: 1.5rem;
      border-top: 1px solid #e5e7eb;
      display: flex;
      justify-content: flex-end;
      gap: 0.75rem;
    }

    /* Context Menu */
    .context-menu {
      position: fixed;
      background: white;
      border: 1px solid #e5e7eb;
      border-radius: 0.375rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      z-index: 1000;
      display: none;
      min-width: 120px;
    }

    .context-menu.active {
      display: block;
    }

    .context-item {
      padding: 0.5rem 0.75rem;
      font-size: 0.875rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      transition: background-color 0.2s;
    }

    .context-item:hover {
      background: #f3f4f6;
    }

    .context-item.delete {
      color: #dc2626;
    }

    .context-item.delete:hover {
      background: #fef2f2;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .header-container {
        padding: 1rem;
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
      }

      .header-right {
        width: 100%;
        justify-content: space-between;
      }

      .main-content {
        padding: 1rem;
      }

      .stats-grid {
        grid-template-columns: 1fr;
      }

      .section-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
      }

      .upload-grid {
        grid-template-columns: 1fr;
      }

      .filter-tabs {
        width: 100%;
        overflow-x: auto;
      }
    }

    /* Utility Classes */
    .hidden {
      display: none !important;
    }

    .text-center {
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <div class="header-container">
      <div class="header-left">
        <div class="logo-section">
          <div class="logo">CK</div>
          <div class="company-info">
            <h1>CK GEO TECH</h1>
            <p>Project Dashboard</p>
          </div>
        </div>
      </div>
      <div class="header-right">
        <div class="project-info">
          <i class="fas fa-folder-open"></i>
          <span>Highway Extension Project</span>
        </div>
        <div class="user-avatar">JD</div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="main-content">
    <!-- Stats Cards -->
    <div class="stats-grid">
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
      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-title">Videos</span>
          <i class="fas fa-video"></i>
        </div>
        <div class="stat-content">
          <div class="stat-number" id="video-count">2</div>
          <p class="stat-description">Video files</p>
        </div>
      </div>
      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-title">Images</span>
          <i class="fas fa-image"></i>
        </div>
        <div class="stat-content">
          <div class="stat-number" id="image-count">2</div>
          <p class="stat-description">Image files</p>
        </div>
      </div>
      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-title">Documents</span>
          <i class="fas fa-file-text"></i>
        </div>
        <div class="stat-content">
          <div class="stat-number" id="document-count">1</div>
          <p class="stat-description">Text documents</p>
        </div>
      </div>
    </div>

    <!-- Upload Section -->
    <div class="upload-section">
      <div class="section-header">
        <h2>My Uploads</h2>
        <button class="btn-primary" id="new-upload-btn">
          <i class="fas fa-plus"></i>
          New Upload
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
        <!-- Upload cards will be dynamically generated here -->
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
        <h3>No uploads found <p> Get started by uploading your first file.</p></h3>
        
      </div>
    </div>
  </main>

  <!-- Upload Modal -->
  <div class="modal-overlay" id="upload-modal">
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
      <i class="fas fa-eye"></i>
      View
    </div>
    <div class="context-item" onclick="editFile()">
      <i class="fas fa-edit"></i>
      Edit
    </div>
    <div class="context-item delete" onclick="deleteFile()">
      <i class="fas fa-trash"></i>
      Delete
    </div>
  </div>

  <script>
    const uploadModal = document.getElementById('upload-modal');
    const openUploadBtn = document.getElementById('new-upload-btn');
    const closeUploadBtn = document.querySelector('.modal-close');

    const filterButtons = document.querySelectorAll('[data-filter]');
    const uploadCards = document.querySelectorAll('.upload-card');
    const emptyState = document.getElementById('empty-state');

    // Open upload modal
    openUploadBtn.addEventListener('click', () => {
      uploadModal.classList.remove('hidden');
    });

    // Close upload modal
    closeUploadBtn.addEventListener('click', () => {
      uploadModal.classList.add('hidden');
    });

    // Filter functionality
    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        const selectedType = button.getAttribute('data-filter');

        // Highlight active button
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

        // Toggle empty state
        if (visibleCount === 0) {
          emptyState.style.display = 'flex';
        } else {
          emptyState.style.display = 'none';
        }
      });
    });

    // Trigger filter once on load to correctly toggle empty state
    document.querySelector('[data-filter].active')?.click();
  </script>
</body>


</html>