<?php

namespace App\Http\Controllers;

use App\Models\{Article, Category, Author, Tag};
use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    public function index()
    {
        $categories = Category::with('translation')->latest()->take(10)->get();
        $articles = Article::with('translation')->paginate(3);
        $tags = Tag::with('translation')->latest()->take(10)->get();

        return view('website.blog', compact('categories', 'articles', 'tags'));
    }
    public function show(Article $article)
    {

        $categories = Category::with('translation')->latest()->take(6)->get();
        $articles = Article::with('translation')->latest()->take(4)->get();

        // $tags = Tag::with('translations')->latest()->take(10)->get();$this->data

        return view('website.articals.show_article', compact('article', 'categories', 'articles'));
    }
}
