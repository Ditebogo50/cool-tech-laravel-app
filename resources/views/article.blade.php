@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <p>{{ $article->created }}</p>

    <p>{{ $article->category }}</p>
    @foreach ($tags as $tag)
        <p>{{ $tag->tag }}</p>
    @endforeach
@endsection
