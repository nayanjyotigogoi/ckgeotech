@extends('layouts.admin.admin_app')

@section('content')
<div class="container">
    <main id="main" class="main">
        <section class="section">
            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                <h2 class="mb-0">📂 Uploads by <strong>{{ $user->name }}</strong></h2>
                <a href="{{ route('admin.silchar.users') }}" class="btn btn-outline-secondary">
                    ← Back to Users
                </a>
            </div>

            @if($uploads->isEmpty())
                <div class="alert alert-info mt-4">
                    No uploads found for this user.
                </div>
            @else
                @php
                    $grouped = $uploads->groupBy('type');
                @endphp

                <!-- Tabs -->
                <ul class="nav nav-tabs mb-3" id="uploadTabs" role="tablist">
                    @foreach($grouped as $type => $items)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if ($loop->first) active @endif"
                                    id="tab-{{ $type }}" data-bs-toggle="tab"
                                    data-bs-target="#tab-content-{{ $type }}" type="button"
                                    role="tab">
                                {{ ucfirst($type) }} ({{ $items->count() }})
                            </button>
                        </li>
                    @endforeach
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="uploadTabContent">
                    @foreach($grouped as $type => $items)
                        <div class="tab-pane fade @if ($loop->first) show active @endif"
                             id="tab-content-{{ $type }}" role="tabpanel">

                            <div class="row g-3">
                                @foreach($items as $upload)
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="card h-100 shadow-sm">
                                            @php
                                                $filePath = asset('uploads/' . $user->id . '/' . $upload->file_name);
                                                $extension = strtolower(pathinfo($upload->file_name, PATHINFO_EXTENSION));
                                                $isImage = in_array($extension, ['jpg', 'jpeg', 'png', 'gif']);
                                                $isVideo = in_array($extension, ['mp4', 'webm', 'ogg']);
                                            @endphp

                                            @if ($isImage)
                                                <div class="ratio ratio-16x9">
                                                    <img src="{{ $filePath }}" class="img-fluid object-fit-cover" alt="Image" style="width: 100%;">
                                                </div>
                                            @elseif ($isVideo)
                                                <div class="ratio ratio-16x9">
                                                    <video controls class="w-100">
                                                        <source src="{{ $filePath }}">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            @else
                                                <div class="card-body text-center">
                                                    <i class="bi bi-file-earmark-text" style="font-size: 2rem;"></i>
                                                    <p class="mt-2 mb-0 small">File</p>
                                                </div>
                                            @endif

                                            <div class="card-body">
                                                <h6 class="card-title text-truncate" title="{{ $upload->title }}">{{ $upload->title }}</h6>
                                                <p class="card-text text-muted small text-truncate" title="{{ $upload->description }}">
                                                    {{ $upload->description ?? '—' }}
                                                </p>
                                                <p class="card-text"><small class="text-muted">Uploaded: {{ $upload->created_at->format('d M Y, h:i A') }}</small></p>
                                            </div>

                                            <div class="card-footer bg-white border-top-0 d-flex justify-content-between">
                                                <a href="{{ $filePath }}" class="btn btn-sm btn-outline-primary" target="_blank">View</a>
                                                <a href="{{ $filePath }}" class="btn btn-sm btn-success" download>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>
    </main>
</div>
@endsection
