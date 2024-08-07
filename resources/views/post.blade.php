
@extends('layouts.main')



@section('container')
    
<article class="mb-3">
    
    <h1>{{ $post->title }}</h1>

    <p>By.  <a class="text-decoration-none" href="/authors/{{$post->author->username}}"> {{$post->author->name}} </a> in <a class="text-decoration-none" href="/categories/{{$post->category->slug}}"> {{$post->category->nama}}</a></p>
    {!! $post->body !!}
</article>

        <a class="text-decoration-none" href="/posts">Back</a>
@endsection
