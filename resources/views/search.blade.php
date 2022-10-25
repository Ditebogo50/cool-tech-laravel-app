@extends('layouts.app')

@section('title', 'Search Page')

@section('content')
    <h1>Search By Article ID:</h1>
    <form action="/search" method="GET">
        <input type="text" name="article_search" required />
        <button type="submit">Search</button>
    </form>

    <h1>Search By Category:</h1>
    <form action="/search" method="GET">
        <input type="text" name="category_search" required />
        <button type="submit">Search</button>
    </form>

    <h1>Search By Tag:</h1>
    <form action="/search" method="GET">
        <input type="text" name="tag_search" required />
        <button type="submit">Search</button>
    </form>
@endsection
