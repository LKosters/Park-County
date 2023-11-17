<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function newspage()
    {
        $news = News::all();
        return view('news', ['news' => $news]);
    }

    public function index()
    {
        $news = News::all();
        return view('news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News();

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $news->title = $request->title;
        $news->content = $request->content;
        $news->thumbnail = 'https://media.discordapp.net/attachments/1148506794063306853/1151105053499858995/51Ee9UDu3iL._AC_UF8941000_QL80_.jpg?width=386&height=560';

        $news->save();

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::find($id);
        return view('news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::find($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $news->title = $request->title;
        $news->content = $request->content;
        $news->thumbnail = $request->thumbnail;

        $news->save();

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect()->route('news.index');
    }
}
