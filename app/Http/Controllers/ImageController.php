<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Prisoner;
use App\Models\User;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('images.index', ['images' => $images]);
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
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $path = public_path('images/other/');
            $image->move($path, $filename);

            $imageDB = new Image();

            $imageDB->url = '/images/other/' . $image->getClientOriginalName();
            $imageDB->alt = $request->altText;

            $imageDB->save();

            return redirect()->route('images.index')->with('success', 'Foto succesvol geupload.');
        }

        return redirect()->route('images.index')->with('error', 'Fout bij het uploaden van foto.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $image = Image::find($id);
        $users = User::all();
        
        return view('images.show', ['image' => $image], ['users' => $users]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $image = Image::find($id);
        return view('images.edit', ['image' => $image]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'altText' => 'required|string',
        ]);

        $image = Image::find($id);

        $image->alt = $request->altText;

        $image->save();

        return redirect()->route('images.show', $id)
            ->with('success', 'Foto ' . $id . ' geupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Image::find($id)->delete();

        return redirect()->route('images.index')
            ->with('success', 'Foto succesvol verwijderd');
    }


    public function addUserToImage(Request $request)
    {
        $image = Image::find($request->image_id);
        $image->users()->attach($request->user_id);
        return redirect('dashboard/images/' . $request->image_id)
            ->with('success', 'user succesvol gekoppeld');
    }
   
    public function removeUserToImage(Request $request)
    {
        $image = Image::find($request->image_id);
        $image->users()->detach($request->user_id);
        return redirect('dashboard/images/1')
            ->with('success', 'user succesvol ontkoppeld');
    }

}
