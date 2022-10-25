<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //get all the id, title and only the 1st paragraph ftom articles
    $articles = DB::table('articles')
    ->select('id', 'title', \DB::raw("SUBSTR(content,1, LOCATE('\n', content)) as first_paragraph"))
    ->get();
    
    return view('home', ['articles'=>$articles]);
});

Route::get('/article/{id}', function ($id) {
    //get tables where the id are the same
    $article = DB::table('articles')
    ->join('categories', 'articles.category_id', '=', 'categories.id')
    //id = article.id
    ->where('articles.id', $id)
    ->select('articles.id', 'articles.title', 'articles.created',  'articles.content', 'categories.category AS category')
    ->get();

    $tags = DB::table('tags')
    ->join('articles', 'articles.id', '=', 'tags.article_id')
    ->where('articles.id', $id)
    ->select('tags.tag AS tag')
    ->get();

    return view('article', ['article'=>$article[0], 'tags' => $tags]);
});


Route::get('/category/{slug}', function ($slug) {
     //join tables where the id is the same
    $articles = DB::table('articles')->join('categories', 'articles.category_id', '=', 'categories.id')
    ->where('categories.category', $slug )
    ->select('articles.title AS title', 'articles.id')
    ->get();

    //return slug to access in view
    return view('category', ['articles'=>$articles, 'slug'=>$slug]);
    //categorirs should only be thse below 
})->where('slug', '(Tech news|Software reviews|Hardware reviews|Opinion pieces)');


Route::get('/tag/{slug}', function ($slug) {
    //join tables where the id is the same
    $articles = DB::table('articles')->join('tags', 'articles.id', '=', 'tags.article_id')
    ->where('tags.tag', $slug )
    ->select('articles.title AS title', 'articles.id')
    ->get();

    return view('tag', ['articles'=>$articles, 'slug'=>$slug]);
});

Route::get('/legal/{subsection}', function($subsection){

    return view('legal', ['subsection'=>$subsection]);
})->where('subsection', '(tos|privacy)');


Route::get('/search', function (Request $request) {

    //if theres a request from the article form
    if($request->input('article_search')) {

        //redirect to the article id page with correct search term
        return Redirect::to('/article/'. $request->input('article_search'));
    }
    else if($request->input('category_search')){

        //redirect to the category page with correct search term
        return Redirect::to('/category/'. $request->input('category_search'));

    }
    else if($request->input('tag_search')){

        //redirect to the tag page with correct search term
        return Redirect::to('/tag/'. $request->input('tag_search'));

    }
    else {
        return view('search');
    }

});