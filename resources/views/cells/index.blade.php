@extends('layouts.dashboard')

@section('content')

    <div class="flex flex-row justify-between">
        <h1 class="text-4xl font-bold pb-10">Cellen</h1>
        <a href="/dashboard/cells/create" class="btn btn-primary">Aanmaken</a>
    </div>
    <div style="overflow: scroll;">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th></th>
                <th>Gevangenen</th>
                <th>Huisnummer</th>
                <th>Maximale gevangenen</th>
                <th>Tv</th>
                <th>Isolatie cel</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cells as $cellsItem)
                <tr>
                    <th>
                        <form method="POST" action="{{ route('cells.destroy', $cellsItem->id ) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                        </form>
                    </th>
                    <td>
                        @foreach($cellsItem->prisoners as $prisoner)
                            {{ $prisoner->name }},
                        @endforeach
                    </td>
                    <td>
                        {{ $cellsItem->housenumber }}
                    </td>
                    <td>
                        {{ $cellsItem->max_inhabitants }}
                    </td>
                    <td>
                        @if($cellsItem->tv == 0)
                            Nee
                        @else
                            Ja
                        @endif
                    </td>
                    <td>
                        @if($cellsItem->isolation == 0)
                            Nee
                        @else
                            Ja
                        @endif
                    </td>
                    <th>
                        <a href="/dashboard/cells/{{ $cellsItem->id }}/edit" class="btn btn-ghost btn-xs">Aanpassen</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
