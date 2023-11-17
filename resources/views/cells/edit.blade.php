@extends('layouts.dashboard')

@section('content')

    <div class="flex flex-row justify-between">
        <h1 class="text-4xl font-bold pb-10">Cel aanpassen</h1>
        <a href="/dashboard/cells" class="btn btn-primary">Annuleren</a>
    </div>
    <div style="overflow: scroll;">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th>Gevangenen</th>
                <th>Huisnummer</th>
                <th>Maximale gevangenen</th>
                <th>Tv</th>
                <th>Isolatie cel</th>
                <th></th>
            </tr>
            </thead>
            <form method="POST" action="{{ route('cells.update', $cells->id) }}">
                @method('PUT')
                @csrf
                <tbody>
                <tr>
                    <td>
                        <?php $count = $cells->max_inhabitants ?>
                        @while($count != 0)
                            <select name="prisoner_id_{{ $count }}" class="select select-bordered w-full max-w-xs mb-5">
                                <option disabled>Maak een keuze</option>
                                <option value="Geen">Geen</option>
                                @foreach($prisoners as $prisoner)
                                    <option value="{{ $prisoner->id }}">{{ $prisoner->name }}</option>
                                @endforeach
                            </select>
                            <?php $count-- ?>
                        @endwhile
                    </td>
                    <td>
                        <input value="{{ $cells->housenumber }}" name="housenumber" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </td>
                    <td>
                        <input value="{{ $cells->max_inhabitants }}" name="max_inhabitants" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </td>
                    <td>
                        <select name="tv" class="select select-bordered w-full max-w-xs">
                            <option disabled>Maak een keuze</option>
                            <option @if( $cells->tv == 1 ) selected @endif value="1">Ja</option>
                            <option @if( $cells->tv == 0 ) selected @endif value="0">Nee</option>
                        </select>
                    </td>
                    <td>
                        <select name="isolation" class="select select-bordered w-full max-w-xs">
                            <option disabled>Maak een keuze</option>
                            <option @if( $cells->isolation == 1 ) selected @endif value="1">Ja</option>
                            <option @if( $cells->isolation == 0 ) selected @endif value="0">Nee</option>
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
