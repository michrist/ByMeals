@extends('template')
@section('container')
<div class="text-center wow fadeInUp mt-4" data-wow-delay="0.1s">
    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Blog</h5>
    <h1 class="mb-5">Add New Post</h1>
</div>
<div class="container">
    <form method="POST" action="/add">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input value="{{ old('title') }}" type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus>
          @error('title')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category )
                @if (old('category_id') == $category -> id)
                <option value="{{ $category -> id }}" selected>{{ $category -> name }}</option>
                @else
                <option value="{{ $category -> id }}">{{ $category -> name }}</option>
                @endif
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body">
            <trix-editor input="body"></trix-editor>
            @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        @if (Auth::check())
        <button type="submit" class="btn btn-primary">Add Post</button>
        @else
        @endif

      </form>
</div>
  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    title.addEventListener('change', function () {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
    })
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script>
@endsection
