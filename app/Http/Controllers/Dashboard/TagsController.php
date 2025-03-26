<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Http\Requests\TagRequest;
use Orion\Http\Requests\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $tags = Tag::with('translations')->paginate(5);

        if ($request->ajax()) {
            return view('dashboard.tags.data', compact('tags'));
        }
        return view('dashboard.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request)
    {

        Tag::create([
            'en' =>  ['name' => $request->name['en']],
            'ar' =>  ['name' => $request->name['ar']]
        ]);

        return redirect(route('tags.index'));
    }



    public function edit(Tag $tag)
    {
        return view('dashboard.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update([
            'en' =>  ['name' => $request->name['en']],
            'ar' =>  ['name' => $request->name['ar']]
        ]);
        return redirect(route('tags.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->findOrFail($tag->id)->delete();

        return redirect(route('tags.index'));
    }
}
