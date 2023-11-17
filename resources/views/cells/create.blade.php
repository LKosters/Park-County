@extends('layouts.dashboard')

@section('content')

    <div class="flex flex-row justify-between">
        <h1 class="text-4xl font-bold pb-10">Cellen aanmaken</h1>
        <a href="/dashboard/cells" class="btn btn-primary">Annuleren</a>
    </div>
    <div style="overflow: scroll;">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th>Huisnummer</th>
                <th>Maximale gevangenen</th>
                <th>Tv</th>
                <th>Isolatie cel</th>
                <th></th>
            </tr>
            </thead>
            <form method="POST" action="{{ route('cells.store') }}">
                @csrf
                <tbody>
                <tr>
                    <td>
                        <input name="housenumber" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </td>
                    <td>
                        <input name="max_inhabitants" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </td>
                    <td>
                        <select name="tv" class="select select-bordered w-full max-w-xs">
                            <option disabled selected>Maak een keuze</option>
                            <option value="1">Ja</option>
                            <option value="0">Nee</option>
                        </select>
                    </td>
                    <td>
                        <select name="isolation" class="select select-bordered w-full max-w-xs">
                            <option disabled selected>Maak een keuze</option>
                            <option value="1">Ja</option>
                            <option value="0">Nee</option>
                        </select>
                    </td>
                    <th>
                        <button type="submit" class="btn btn-ghost btn-xs">Toevoegen</button>
                    </th>
                </tr>
                </tbody>
            </form>
        </table>
    </div>

@endsection
