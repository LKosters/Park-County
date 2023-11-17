@extends('layouts.dashboard')

@section('content')
<!-- Show toast message -->
@if (session('success'))
<div class="toast toast-end">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
</div>
@endif

<!-- Buttons for back, edit and delete -->
<div class="flex flex-row justify-between">
    <h1 class="text-4xl font-bold">Foto {{$image->id}}</h1>
    <div class="join">
        <form action="{{ route('images.destroy', [$image->id]) }}" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-secondary join-item">Verwijderen</button>
        </form>
        <a href="/dashboard/images/{{$image->id}}/edit" class="btn btn-accent join-item">Wijzig</a>
        <a href="/dashboard/images" class="btn btn-primary join-item">Terug</a>
    </div>
</div>

<!-- Main card -->
<div class="card w-64 bg-base-100 shadow-xl">
    <figure><img src="{{$image->url}}" alt="{{$image->alt}}" /></figure>
    <div class="card-body">
        <h2 class="card-title">Alternatieve tekst:</h2>
        <p>{{$image->alt}}</p>
    </div>
</div>

<div style="overflow: scroll;">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>
                </th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="{{ route('image.addUserToImage') }}">
                @csrf
                <input type="hidden" value="{{$image->id}}" name="image_id" />
                <tr>
                    <th>
                        <button type="submit">Toevoegen</button>
                    </th>
                    <td>
                        <select name="user_id">
                            @foreach($users as $user)
                                @if(isset($user->images[0]->pivot->image_id))
                                
                                @else
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
            </form>
            @foreach($image->users as $user)
            <tr>
                <th>
                    <form method="POST" action="{{ route('image.removeUserToImage') }}">
                        @csrf
                        <input type="hidden" value="{{$image->id}}" name="image_id" />
                        <input type="hidden" value="{{$user->id}}" name="user_id" />
                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg></button>
                    </form>
                </th>

                <td>
                    {{$user->name}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection