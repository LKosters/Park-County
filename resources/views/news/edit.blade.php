@extends('layouts.dashboard')

@section('content')

    <div class="flex flex-row justify-between">
        <h1 class="text-4xl font-bold pb-10">Nieuwsberichten aanpassen</h1>
        <a href="/dashboard/news" class="btn btn-primary">Annuleren</a>
    </div>
    <div style="overflow: scroll;">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Titel</th>
                <th>Content</th>
                <th></th>
            </tr>
            </thead>
            <form method="POST" action="{{ route('news.update', $news->id) }}">
                @method('PUT')
                @csrf
                <tbody>
                <tr>
                    <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                    <img src="{{ $news->thumbnail }}"/>
                                    <input style="display: none" value="{{ $news->thumbnail }}" name="thumbnail" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input value="{{ $news->title }}" name="title" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </td>
                    <td>
                        <input value="{{ $news->content }}" name="content" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </td>
                    <th>
                        <button type="submit" class="btn btn-ghost btn-xs">Toevoegen</button>
                    </th>
                </tr>
                </tbody>
            </form>
        </table>
    </div>

@endsection
