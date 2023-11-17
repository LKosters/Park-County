@extends('layouts.dashboard')
@section('content')

<div class="flex flex-row justify-between">
    <h1 class="text-2xl font-bold">Foto kiezen voor {{$prisoner->name}} (Klik op een foto om deze te koppelen)</h1>
    <a href="{{route('prisoners.edit', $prisoner->id)}}" class="btn btn-primary">Terug</a>
</div>

<div class="py-8 flex flex-wrap gap-2">
    @foreach($images as $image)
    <form method="POST" class="w-[250px] h-[250px]" action="{{route('prisoners.attachImage')}}">
        @method('POST')
        @csrf
        <button>
            <img class="w-[250px] h-[250px]" src="{{$image->url}}" alt="{{$image->alt}}">
            <input hidden name="imageId" value="{{$image->id}}" />
            <input hidden name="prisonerId" value="{{$prisoner->id}}" />
        </button>
    </form>
    @endforeach
</div>

@endsection