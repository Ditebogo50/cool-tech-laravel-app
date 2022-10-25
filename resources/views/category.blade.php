@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1>Category:</h1>
    <h1>{{ $slug }}</h1>
    <h2>Articles:</h2>
    @foreach ($articles as $article)
        <p><a href="{{ url('/article', [$article->id]) }}">{{ $article->title }}</a></p>
    @endforeach
@endsection
