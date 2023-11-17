@extends('layouts.layout')
@section('content')
<div class="hero" style="background-image: url(../images/parkcounty.png);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="text-center text-neutral-content py-24 ">
        <div class="text-sm breadcrumbs flex justify-center">
            <ul>
                <li><a href="/">Home</a></li>
                <li>Mugshots</li>
            </ul>
        </div>
        <h1 class="text-5xl font-bold">Mugshots</h1>
    </div>
</div>
<div class="py-2 flex flex-wrap gap-4 w-10/12 m-auto">
    @foreach($prisoners as $prisoner)
    @foreach($prisoner->images as $image)
    <img class="w-[250px] h-[250px] object-cover" src="{{$image->url}}" alt="{{$image->alt}}">
    @endforeach
    @endforeach
</div>
@endsection