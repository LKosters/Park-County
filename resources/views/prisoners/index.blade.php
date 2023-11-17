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

<!-- Prisoner create dialog -->
<dialog id="my_modal_3" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">Gevangenen aanmaken</h3>
        <form method="POST" action="{{ route('prisoners.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input required name="name" type="text" placeholder="Naam" class="input input-bordered w-full max-w-xs my-1" />
            <input required name="email" type="text" placeholder="E-mail" class="input input-bordered w-full max-w-xs my-1" />
            <br />
            <button class="btn btn-primary">Aanmaken</button>
        </form>
    </div>
</dialog>

<div class="flex flex-row justify-between">
    <h1 class="text-4xl font-bold pb-10">Gevangenen</h1>
    <button class="btn btn-primary" onclick="my_modal_3.showModal()">Aanmaken</button>
</div>


<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($prisoners as $prisoner)
            <tr>
                <th>
                    <form method="POST" action="{{ route('prisoners.destroy', $prisoner->id ) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg></button>
                    </form>
                </th>
                <td>
                    <div class="flex items-center space-x-3">
                        <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                @if(!$prisoner->images->isEmpty())
                                <img src="{{$prisoner->images[0]->url}}" alt="{{$prisoner->images[0]->alt}}" draggable="false" />
                                @else
                                <img src="/images/other/placeholder.png" alt="placeholder" draggable="false">
                                @endif
                            </div>
                        </div>
                        <div>
                            <div class="font-bold">{{$prisoner->name}}</div>
                        </div>
                    </div>
                </td>
                <td>
                    {{$prisoner->email}}
                </td>
                <th>
                    <a href="/dashboard/prisoners/{{$prisoner->id}}/edit" class="btn btn-ghost btn-xs">Wijzig</a>
                </th>
            </tr>
            @endforeach
        </tbody>
        <!-- foot 🤤 -->
        <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Emaill</th>
                <th></th>
            </tr>
        </tfoot>

    </table>
</div>

@endsection