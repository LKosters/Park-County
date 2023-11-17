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
    <h1 class="text-4xl font-bold">Foto {{$mugshot->id}}</h1>
    <div class="join">
        <form action="{{ route('mugshots.destroy', [$mugshot->id]) }}" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-secondary join-item">Verwijderen</button>
        </form>
        <a href="/dashboard/mugshots/{{$mugshot->id}}/edit" class="btn btn-accent join-item">Wijzig</a>
        <a href="/dashboard/mugshots" class="btn btn-primary join-item">Terug</a>
    </div>
</div>

<!-- Main card -->
<div class="card w-64 bg-base-100 shadow-xl">
    <figure><img src="{{$mugshot->url}}" alt="{{$mugshot->alt}}" /></figure>
    <div class="card-body">
        <h2 class="card-title">Alternatieve tekst:</h2>
        <p>{{$mugshot->alt}}</p>
    </div>
</div>

<!-- Connected to the image -->
<div class="py-8">
    <h1 class="text-4xl font-bold">Gekoppeld aan</h1>
    @foreach($mugshot->prisoners as $prisoner)
    <form method="post" action="{{ route('mugshots.removeUserFromImage') }}">
        @csrf
        @method('delete')
        <button class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
            </svg>
            <input hidden name="imageId" value="{{$mugshot->id}}">
            <input hidden name="chosenPrisoner" value="{{$prisoner->id}}">
            <p>{{$prisoner->name}}</p>
        </button>
    </form>
    @endforeach
</div>

<!-- Connect prisoners to image -->
@if(!$prisoners->isEmpty())
<div class="py-8">
    <h1 class="text-4xl font-bold pb-2">Koppel aan foto</h1>
    <form method="post" action="{{ route('mugshots.addUserToImage') }}">
        @csrf
        @method('post')
        <select name="chosenPrisoner" class="select select-bordered w-full max-w-xs">
            <!-- Check if prisoner isn't connected to the image yet -->
            @foreach($prisoners as $prisoner)
            <option value="{{$prisoner->id}}">{{$prisoner->name}}</option>
            @endforeach
        </select>
        <input hidden name="imageId" value="{{$mugshot->id}}">
        <button class="btn btn-primary">Koppelen</button>
    </form>
</div>
@endif
@endsection