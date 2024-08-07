@extends('layouts.main')



@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://images.unsplash.com/photo-1601119479271-21ca92049c81?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                        By. <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">
                            {{ $posts[0]->author->name }} </a>in <a class="text-decoration-none"
                            href="/categories/{{ $posts[0]->category->slug }}"> {{ $posts[0]->category->nama }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a class="text-decoration-none btn btn-primary" href="posts/{{ $posts[0]->slug }}">Read More</a>

            </div>
        </div>
    @else
        <p class="text-center fs-4">
            No post found.
        </p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute bg-dark  px-3 py-2"
                    style="background-color: rgba(0, 0, 0, 0.7);">
                    <a class="text-white text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->nama }}</a></div>
                    <img src="https://images.unsplash.com/photo-1601119479271-21ca92049c81?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="card-img-top" 
                    alt="..."
                    width="500"
                    height="300"><div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>
                        <small class="text-muted">
                            By. <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">
                                {{ $post->author->name }} </a>in <a class="text-decoration-none"
                                href="/categories/{{ $post->category->slug }}"> {{ $post->category->nama }}</a>
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="posts/{{ $post->slug }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>


   
@endsection
