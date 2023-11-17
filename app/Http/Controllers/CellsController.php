<?php

namespace App\Http\Controllers;

use App\Models\Prisoner;
use Illuminate\Http\Request;
use App\Models\Cell;

class CellsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cells = Cell::all();
        return view('cells.index', ['cells' => $cells]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cells.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cell = new Cell();

        $request->validate([
            'housenumber' => 'required',
            'max_inhabitants' => 'required',
            'tv' => 'required',
            'isolation' => 'required',
        ]);

        $cell->housenumber = $request->housenumber;
        $cell->max_inhabitants = $request->max_inhabitants;
        $cell->tv = $request->tv;
        $cell->isolation = $request->isolation;

        $cell->save();

        return redirect()->route('cells.index');
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
        $cells = Cell::find($id);
        $prisoners = Prisoner::all();
        return view('cells.edit', ['cells' => $cells], ['prisoners' => $prisoners]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cell = Cell::find($id);

        $request->validate([
                'housenumber' => 'required',
                'max_inhabitants' => 'required',
                'tv' => 'required',
                'isolation' => 'required',
        ]);

        $cell->prisoners()->detach();


        $cell->housenumber = $request->housenumber;
         $cell->max_inhabitants = $request->max_inhabitants;
         $cell->tv = $request->tv;
         $cell->isolation = $request->isolation;

         $cell->save();

        $cell->prisoner_id = $request->prisoner_id;

        foreach (Prisoner::all() as $prisoner) {
            if ($request->has('prisoner_id_' . $prisoner->id)) {
                $cell->prisoners()->attach($prisoner->id);
            }
        }

         return redirect()->route('cells.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cell = Cell::find($id);

        $cell->delete();

        return redirect()->route('cells.index');
    }
}
