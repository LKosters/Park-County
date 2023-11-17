@extends('layouts.dashboard')
@section('content')

<div class="flex flex-row justify-between">
    <h1 class="text-4xl font-bold">{{$prisoner->name}}</h1>
    <div class="join">
        <a href="{{route('prisoners.selectImage', $prisoner->id)}}" class="btn btn-success join-item">Foto koppelen</a>
        <a href="/dashboard/prisoners" class="btn btn-primary join-item">Terug</a>
    </div>
</div>

<div class="py-6">
    <form method="POST" action="{{ route('prisoners.update', [$prisoner->id]) }}">
        @csrf
        @method('put')
        <p>Naam: <input required name="name" type="text" placeholder="Naam" class="input input-bordered w-full max-w-xs my-1" value="{{$prisoner->name}}" /></p>
        <p>Email: <input required name="email" type="text" placeholder="Email" class="input input-bordered w-full max-w-xs my-1" value="{{$prisoner->email}}" /></p>
        <br />
        <button class="btn btn-primary">Wijzig</button>
    </form>
</div>

@if(!$prisoner->images->isEmpty())
<div class="py-6">
    <h1 class="text-4xl font-bold py-2">Gekoppelde foto's</h1>
    <div class="flex flex-wrap gap-2">
        @foreach($prisoner->images as $image)
        <div class="card card-compact w-[250px] h-[300px]  bg-base-100 shadow-xl">
            <figure><img class="w-[250px] h-[250px]" src="{{$image->url}}" alt="{{$image->alt}}" /></figure>
            <div class="card-body">
                <div class="card-actions justify-end">
                    <form action="{{ route('prisoners.detachImage', [$prisoner->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <input hidden name="imageId" value="{{$image->id}}"/>
                        <button class="btn btn-secondary">Ontkoppel</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@endsection