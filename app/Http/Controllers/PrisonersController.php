<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Prisoner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class PrisonersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get prisoners that are softdeleted
        // $prisoners = Prisoner::withTrashed()->get();
        $prisoners = Prisoner::all();
        return view('prisoners.index', ['prisoners' => $prisoners]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(Prisoner::class)],
        ]);
        $prisoner = new Prisoner();

        $firstname = explode(' ', $request->name, 2)[0];

        $prisoner->name = $request->name;
        $prisoner->email = $request->email;
        $prisoner->password = Hash::make($firstname);

        $prisoner->save();

        return redirect()->route('prisoners.index')->with('success', 'Gevangenen succesvol aangemaakt.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prisoner = Prisoner::find($id);
        return view('prisoners.edit', ['prisoner' => $prisoner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prisoner = Prisoner::find($id);

        $prisoner->name = $request->name;
        $prisoner->email = $request->email;

        $prisoner->save();

        return redirect()->route('prisoners.index')->with('success', 'Gevangenen succesvol bewerkt.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prisoner = Prisoner::find($id);

        $prisoner->delete();

        return redirect()->route('prisoners.index')->with('success', 'Gevangenen succesvol verwijderd.');
    }

    public function selectImage($id)
    {
        $prisoner = Prisoner::find($id);
        $images = Image::whereDoesntHave('prisoners', function ($query) use ($id) {
            $query->where('prisoner_id', $id);
        })->get();

        return view('prisoners.selectImage', ['images' => $images, 'prisoner' => $prisoner]);
    }

    public function attachImage(Request $request)
    {
        $prisoner = Prisoner::find($request->prisonerId);
        $prisoner->images()->attach($request->imageId);
        return redirect()->route('prisoners.edit', $prisoner->id)
            ->with('success', 'Foto succesvol gekoppeld');
    }

    public function detachImage(Request $request, $id)
    {
        $prisoner = Prisoner::find($id);
        $prisoner->images()->detach($request->imageId);
        return redirect()->route('prisoners.edit', $id)
            ->with('success', 'Foto succesvol ontkoppeld');
    }

    public function prisonerLogin()
    {
        return view('prisoners.login');
    }

    public function prisonerAuth(Request $request)
    {
        $prisoner = Prisoner::all()->where('email', '=', $request->email)->first();
        if($prisoner == null){
            return redirect()->route('prisoners.login')->with('error', 'Email of wachtwoord is onjuist.');
        }
        if(Hash::check($request->password, $prisoner->password)){
            return view('prisoners.indexForPrisoner', ['prisoner' => $prisoner]);
        }
        return redirect()->route('prisoners.login')->with('error', 'Email of wachtwoord is onjuist.');
    }
}
