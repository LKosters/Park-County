@extends('layouts.dashboard')

@section('content')

    <div class="flex flex-row justify-between">
        <h1 class="text-4xl font-bold pb-10">Voertuigen aanmaken</h1>
        <a href="/dashboard/vehicles" class="btn btn-primary">Annuleren</a>
    </div>
    <div style="overflow: scroll;">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th>Merk</th>
                <th>Model</th>
                <th>Jaar</th>
                <th>Automatisch</th>
                <th>Brandstof</th>
                <th>Kenteken</th>
                <th></th>
            </tr>
            </thead>
            <form method="POST" action="{{ route('vehicles.store') }}">
                @csrf
                <tbody>
                    <tr>
                        <td>
                            <input name="brand" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                        </td>
                        <td>
                            <input name="model" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                        </td>
                        <td>
                            <input name="year" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                        </td>
                        <td>
                            <select name="automatic" class="select select-bordered w-full max-w-xs">
                                <option disabled selected>Maak een keuze</option>
                                <option value="1">Ja</option>
                                <option value="0">Nee</option>
                            </select>
                        </td>
                        <td>
                            <input name="fuel" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                        </td>
                        <td>
                            <input name="license_plate" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
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
