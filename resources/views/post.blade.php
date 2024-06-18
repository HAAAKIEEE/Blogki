
@extends('layouts.main')



@section('container')
    
<article class="mb-3">
    
    <h1>{{ $post->title }}</h1>
    <p>By. Baihaqi in <a href="/categories/{{$post->category->slug}}"> {{$post->category->nama}}</a></p>
    {!! $post->body !!}
</article>

        <a href="/posts">Back</a>
@endsection
