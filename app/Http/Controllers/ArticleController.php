<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::all();
        return view('home', ['articles' => $articles, 'categories' => $categories]);
    }

    public function filterByCategory($categoryId)
    {
        $categories = Category::all();
        $articles = Article::where('category_id', $categoryId)->get();
        $categoryName = Category::find($categoryId)->name;
        return view('filter', ['articles' => $articles, 'categories' => $categories, 'categoryName' => $categoryName]);
    }

    public function show($articleId)
    {
        $categories = Category::all();
        $article = Article::find($articleId);
        $categoryName = Category::find($article->category_id)->name;
        return view('detail', ['article' => $article, 'categories' => $categories, 'categoryName' => $categoryName] );
    }

    public function author(){
        $categories = Category::all();
        $authors = Author::all();
        return view('author', ['authors' => $authors, 'categories' => $categories]);
    }

    public function aboutUs()
    {
        $categories = Category::all();
        return view('aboutUs', ['categories' => $categories]);
    }

    public function popular()
    {
        $categories = Category::all();
        $articles = Article::latest('id')->paginate(3);
        return view('popular', ['articles' => $articles, 'categories' => $categories]);
    }
}
