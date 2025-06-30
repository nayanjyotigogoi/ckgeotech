@extends('layouts.admin.admin_app')

@section('content')
    <div class="container">
        <main id="main" class="main">
            <section class="section">
                <h2>About Us</h2>
                <div class="card p-3 mb-4">
                    {!! $about->content ?? '<em>No content added yet.</em>' !!}
                </div>

                <a href="{{ route('admin.about.edit') }}" class="btn btn-primary">Edit Content</a>
            </section>
        </main>
    </div>
@endsection
