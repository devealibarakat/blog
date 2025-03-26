<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\ArticleTranslation;
use App\Models\Tag;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles = Article::paginate(5);

        if ($request->ajax()) {
            return view('dashboard.articles.data', compact('articles'));
        }

        return view('dashboard.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tags = Tag::with('translations')->get();

        return view('dashboard.articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {

        $article = Article::create([
            'en' => [
                'title' => $request->title['en'],
                'slug' => $request->slug['en'],
                'short_description' => $request->short_description['en'],
                'meta_keywords' =>  array_map('strval', (array) $request->meta_keywords['en']),
                'description' => $request->description['en'],
            ],
            'ar' => [
                'title' => $request->title['ar'],
                'slug' => $request->slug['ar'],
                'short_description' => $request->short_description['ar'],
                'meta_keywords' =>  array_map('strval', (array) $request->meta_keywords['ar']),
                'description' => $request->description['ar'],
            ],
        ]);

        $article->tags()->attach($request->tags);

        return redirect(route('articles.index'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)

    {
        $article->with('tags')->findOrFail($article->id);

        $tags = Tag::all();

        return view('dashboard.articles.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage. $article->id;
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('articles.index'));
    }

    public function checkSlug(Request $request)
    {

        $slug =  SlugService::createSlug(ArticleTranslation::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
