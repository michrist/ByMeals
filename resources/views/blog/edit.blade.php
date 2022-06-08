@extends('template')
@section('container')
<div class="text-center wow fadeInUp mt-4" data-wow-delay="0.1s">
    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Blog</h5>
    <h1 class="mb-5">Edit New Post</h1>
</div>
<div class="container">
    <form method="POST" action="/update/{{ $post->id }}">
        @csrf
        {{ method_field('PUT') }}
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input value="{{ $post->title }}" type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus>
          @error('title')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category )
                @if (old('category_id', $post -> category -> id) == $category -> id)
                <option value="{{ $category -> id }}" selected>{{ $category -> name }}</option>
                @else
                <option value="{{ $category -> id }}">{{ $category -> name }}</option>
                @endif
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="{{ old('body', $post -> body) }}">
            <trix-editor input="body">{{ $post -> body }}</trix-editor>
            @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Update Post</button>
        </form>
</div>
@endsection
