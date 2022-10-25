@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome to the homepage of cool tech!</h1>
    <p>Today is {{ date('j F Y') }}.</p>
    <h2>Articles:</h2>
    @foreach($articles as $article)
        <!-- show article title and paragraph content and link at title-->
        <p><a href="{{ url('/article', [$article->id]) }}">{{$article->title}}</a></p>
        <p>{{$article->first_paragraph}}</p>
    @endforeach
@endsection