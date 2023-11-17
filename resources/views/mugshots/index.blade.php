@extends('layouts.dashboard')

@section('content')

<!-- Toast message -->
@if (session('success'))
<div class="toast toast-end">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
</div>
@endif
@if (session('error'))
<div class="toast toast-end">
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
</div>
@endif
@foreach ($errors->all() as $error)
<div class="toast toast-end">
    <div class="alert alert-error">
        {{ $error }}
    </div>
</div>
@endforeach

<!-- Upload dialog -->
<dialog id="my_modal_3" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">Foto uploaden</h3>
        <form method="POST" action="{{ route('mugshots.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input required type="file" name="image" class="file-input file-input-bordered w-full max-w-xs my-1"><br />
            <input required name="altText" type="text" placeholder="Alternatieve tekst" class="input input-bordered w-full max-w-xs my-1" />
            <select required name="chosenPrisoner" class="select select-bordered w-full max-w-xs my-1">
                @foreach($prisoners as $prisoner)
                <option value="{{$prisoner->id}}">{{$prisoner->name}}</option>
                @endforeach
            </select>
            <br />
            <button class="btn btn-primary">Uploaden</button>
        </form>

        <p class="py-4"></p>
    </div>
</dialog>

<!-- Top row -->
<div class="flex flex-row justify-between">
    <h1 class="text-4xl font-bold pb-10">Mugshots</h1>
    <button class="btn btn-primary" onclick="my_modal_3.showModal()">Uploaden</button>
</div>

<!-- All mugshots -->
<div class="flex gap-4 flex-wrap overflow-x-auto">
    @foreach($mugshots as $mugshot)
    <a href="mugshots/{{$mugshot->id}}">
        <img class="w-[250px] h-[250px]" src="{{$mugshot->url}}" alt="{{$mugshot->alt}}">
    </a>
    @endforeach
</div>

@endsection