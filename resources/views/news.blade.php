@extends('layouts.layout')

@section('content')
<div class="hero" style="background-image: url(../images/parkcounty.png);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="text-center text-neutral-content py-24 ">
        <div class="text-sm breadcrumbs flex justify-center">
            <ul>
                <li><a href="/">Home</a></li>
                <li>Nieuwsberichten</li>
            </ul>
        </div>
        <h1 class="text-5xl font-bold">Nieuwsberichten</h1>
    </div>
</div>

    <div class="bg-base-200">
        <div class="container flex flex-col">

            @foreach($news as $newsItem)
            <div class="card lg:card-side bg-base-100 shadow-xl mb-10">
                <figure class="md:w-full lg:w-96"><img class="lg:h-full md:w-full md:h-96 object-cover" src="{{ $newsItem->thumbnail }}" alt="Mugshot"/></figure>
                <div class="card-body max-w-5/6">
                    <h2 class="card-title">{{ $newsItem->title }}</h2>
                    <p>
                        {{ $newsItem->content }}
                    </p>
                    <div class="card-actions">
                        <button class="btn btn-primary">Bekijk nieuwsbericht</button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <div class="bg-primary text-neutral-content">
        <div class="small-container">
            <h2 class="text-4xl font-bold">Doe nu aangifte</h2>
            <p class="py-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Massa vitae tortor condimentum lacinia quis. Velit sed ullamcorper morbi tincidunt ornare massa eget. Cursus metus aliquam eleifend mi.
            </p>
            <div>
                <button class="btn btn-secondary">Aangifte doen</button>
            </div>
        </div>
    </div>
@endsection
