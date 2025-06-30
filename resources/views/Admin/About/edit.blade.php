@extends('layouts.admin.admin_app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>Edit About Us</h2>
                <form action="{{ route('admin.about.update') }}" method="POST">
                    @csrf
                   

                    <div class="mb-4">
                        <label for="about_content" class="form-label">About Content</label>
                        <textarea name="content" id="about_content" class="form-control" rows="10">
                            {{ old('content', $about->content) }}
                        </textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ route('admin.about.view') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </section>
        </main>
    </div>

    <!-- CKEditor Setup -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.editorConfig = function (config) {
            config.allowedContent = true;
            config.extraAllowedContent = 'i(*)[*]';
            config.autoParagraph = false;
        };

        CKEDITOR.replace('about_content', {
       
            customConfig: "{{ asset('ckeditor/config.js') }}",
            filebrowserUploadMethod: 'form',
            allowedContent: true,
            extraAllowedContent: 'i(*)[*]',
            height: '300px',
            width: '100%',
            ignoreEmpty: false
        });
    </script>
@endsection
