@extends('layouts.layout')

@section('content')
<div class="flex flex-col items-center justify-center">
    <h1 class="text-2xl font-bold">Hallo {{$prisoner->name}}</h1>
    <p>Uw gevangenennummer is: {{$prisoner->id}}</p>
    <p>Uw email is: {{$prisoner->email}}</p>
    @if($prisoner->cell->count() >= 1)
    <p>Je zit in deze @if($prisoner->cell->count() > 1) cellen: @else cell: @endif</p>
    @foreach($prisoner->cell as $cell)
    <p>{{$cell->housenumber}}</p>
    @endforeach
    @endif
    @if($prisoner->images()->count() > 0)
    <h2>Dit zijn uw foto's:</h2>
    <div class="flex flex-wrap w-[798px]">
        @foreach($prisoner->images as $image)
        <img class="w-[250px] h-[250px] m-2" src="{{$image->url}}" alt="{{$image->alt}}" draggable="false">
        @endforeach
    </div>
    @endif
</div>
@endsection