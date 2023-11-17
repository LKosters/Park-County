@extends('layouts.dashboard')

@section('content')

<div class="flex flex-row justify-between">
    <h1 class="text-4xl font-bold pb-10">Dashboard</h1>
</div>

<div class="m-auto flex flex-wrap gap-2">
    <p class="text-2xl">Welkom, {{$name}}</p>
</div>

@endsection