<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Prisoner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MugshotsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prisoners = Prisoner::all();
        $mugshots = DB::table('images')->where('url', 'like', '%mugshots%')->get();
        return view('mugshots.index', ['mugshots' => $mugshots, 'prisoners' => $prisoners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|max:2048|mimes:png,jpg,jpeg',
            'altText' => 'required',
            'chosenPrisoner' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $path = public_path('images/mugshots/' . $request->chosenPrisoner);
            $image->move($path, $filename);

            $imageDB = new Image();

            $imageDB->url = '/images/mugshots/' . $request->chosenPrisoner . '/' . $image->getClientOriginalName();
            $imageDB->alt = $request->altText;

            $imageDB->save();

            $imageDB->prisoners()->attach($request->chosenPrisoner);

            return redirect()->route('mugshots.index')->with('success', 'Foto succesvol geupload.');
        }

        return redirect()->route('mugshots.index')->with('error', 'Fout bij het uploaden van foto.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mugshot = Image::find($id);
        $prisoners = Prisoner::whereDoesntHave('images', function ($query) use ($id) {
            $query->where('image_id', $id);
        })->get();

        return view('mugshots.show', ['mugshot' => $mugshot, 'prisoners' => $prisoners]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mugshot = Image::find($id);
        return view('mugshots.edit', ['mugshot' => $mugshot]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'altText' => 'required|string',
        ]);

        $mugshot = Image::find($id);

        $mugshot->alt = $request->altText;

        $mugshot->save();

        return redirect()->route('mugshots.show', $id)
            ->with('success', 'Foto ' . $id . ' geupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Image::find($id)->delete();

        return redirect()->route('mugshots.index')
            ->with('success', 'Foto succesvol verwijderd');
    }

    public function mugshots()
    {
        $prisoners = Prisoner::all();
        return view('mugshots.mugshot', ['prisoners' => $prisoners]);
    }

    public function addUserToImage(Request $request)
    {
        $mugshot = Image::find($request->imageId);
        $mugshot->prisoners()->attach($request->chosenPrisoner);
        return redirect()->route('mugshots.show', $request->imageId)
            ->with('success', 'Gevangene succesvol gekoppeld');
    }

    public function removeUserFromImage(Request $request)
    {
        $mugshot = Image::find($request->imageId);
        $mugshot->prisoners()->detach($request->chosenPrisoner);
        return redirect()->route('mugshots.show', $request->imageId)
            ->with('success', 'Gevangene succesvol ontkoppeld');
    }
}
