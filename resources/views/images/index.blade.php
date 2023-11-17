@extends('layouts.dashboard')

@section('content')

@if (session('success'))
<div class="toast toast-end">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
</div>
@endif

<!-- Upload dialog -->
<dialog id="my_modal_3" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">Foto uploaden</h3>
        <form method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input required type="file" name="image" class="file-input file-input-bordered w-full max-w-xs my-1"><br />
            <input required name="altText" type="text" placeholder="Alternatieve tekst" class="input input-bordered w-full max-w-xs my-1" />
            <br />
            <button class="btn btn-primary">Uploaden</button>
        </form>

        <p class="py-4"></p>
    </div>
</dialog>

<div class="flex flex-row justify-between">
    <h1 class="text-4xl font-bold pb-10">Foto's</h1>
    <a class="btn btn-primary" onclick="my_modal_3.showModal()">Uploaden</a>
</div>


<div class="flex gap-4 flex-wrap overflow-x-auto">
    @foreach($images as $image)
    <a href="images/{{$image->id}}">
        <img class="w-[250px] h-[250px]" src="{{$image->url}}" alt="{{$image->alt}}">
    </a>
    @endforeach
</div>

@endsection