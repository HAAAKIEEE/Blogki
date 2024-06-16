@extends('layouts.main')



@section('container')
    @foreach ($posts as $post)
        <article class="mb-3">
            <a href="posts/{{$post['slug']}}">
            <h1>{{ $post['title'] }}</h1></a>
            <h5>by: {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
