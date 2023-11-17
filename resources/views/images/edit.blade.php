@extends('layouts.dashboard')

@section('content')

<!-- Top row -->
<div class="flex flex-row justify-between">
    <h1 class="text-4xl font-bold pb-10">Edit foto {{$image->id}}</h1>
    <a href="/dashboard/images/{{$image->id}}" class="btn btn-primary">Terug</a>
</div>

<form method="POST" action="{{ route('images.update', [$image->id]) }}">
    @csrf
    @method('put')
    <input required name="altText" type="text" placeholder="Alternatieve tekst" class="input input-bordered w-full max-w-xs my-1" value="{{$image->alt}}"/>
    <button class="btn btn-primary">Wijzig</button>
</form>
@endsection