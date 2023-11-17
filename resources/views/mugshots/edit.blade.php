@extends('layouts.dashboard')

@section('content')

<!-- Top row -->
<div class="flex flex-row justify-between">
    <h1 class="text-4xl font-bold pb-10">Edit foto {{$mugshot->id}}</h1>
    <a href="/dashboard/mugshots/{{$mugshot->id}}" class="btn btn-primary">Terug</a>
</div>

<form method="POST" action="{{ route('mugshots.update', [$mugshot->id]) }}">
    @csrf
    @method('put')
    <input required name="altText" type="text" placeholder="Alternatieve tekst" class="input input-bordered w-full max-w-xs my-1" value="{{$mugshot->alt}}"/>
    <button class="btn btn-primary">Wijzig</button>
</form>
@endsection