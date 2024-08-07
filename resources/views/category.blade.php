@extends('layouts.main')



@section('container')
<h1>Post Category : {{$category}}</h1>

    @foreach ($posts as $post)
        <article class="mb-3">
            <a href="/posts/{{ $post->slug }}">
                <h1>{{ $post->title}}</h1>
            </a>
            <h5>by: <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></h5>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="posts/{{ $post->slug }}">Read More...</a>
    
        </article>
    @endforeach
@endsection
