@extends('layouts.layout')

@section('content')
<div class="hero min-h-screen" style="background-image: url(https://media.discordapp.net/attachments/1148506794063306853/1148564567325151232/Future_Park_County_Police_Station.webp?width=1177&height=662);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">De beste gevangenis TER WERELD</h1>
            <p class="mb-5">Biedt een ongeëvenaarde ervaring van innerlijke groei en persoonlijke transformatie. Hier vind je geen muren van steen, maar grenzeloze kansen om jezelf opnieuw uit te vinden. Onze missie is om je te bevrijden van beperkingen en je de sleutels tot zelfontdekking te bieden.</p>
            <button class="btn btn-primary" onclick="my_modal_3.showModal()">Aangifte doen</button>
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="font-bold text-lg">Aangifte doen</h3>
                    <div>

                        <div class="flex flex-col">
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Voornaam</span>
                                </label>
                                <input type="text" placeholder="Voornaam" class="input input-bordered w-full" />
                            </div>

                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Tussenvoegsel</span>
                                </label>
                                <input type="text" placeholder="Tussenvoegsel" class="input input-bordered w-full" />
                            </div>

                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Achternaam</span>
                                </label>
                                <input type="text" placeholder="Achternaam" class="input input-bordered w-full" />
                            </div>
                        </div>

                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Emailadres</span>
                            </label>
                            <input type="text" placeholder="Emailadres" class="input input-bordered w-full" />
                        </div>

                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Soort aangifte</span>
                            </label>
                            <select class="select select-bordered">
                                <option disabled selected>Soort aangifte</option>
                                <option>Star Wars</option>
                                <option>Harry Potter</option>
                                <option>Lord of the Rings</option>
                                <option>Planet of the Apes</option>
                                <option>Star Trek</option>
                            </select>
                        </div>
                        <button class="btn btn-secondary mt-5" onclick="alert('niet ons probleem')">Verzenden</button>
                    </div>
                </div>
            </dialog>
        </div>
    </div>
</div>

<div class="bg-base-200" id="overons">
    <div class="flex flex-col-reverse lg:flex-row-reverse container">
        <div>
            <img class="w-full mask mask-heart" src="https://media.discordapp.net/attachments/1148506794063306853/1148961000796721152/mcdonalds-employees-m-facebook.jpg?width=905&height=662" />
        </div>
        <div class="lg:w-5/6 flex flex-col justify-center mr-10">
            <h2 class="text-5xl font-bold">Over ons</h2>
            <p class="py-6">
                Welkom bij onze unieke gevangenis, waar we een frisse kijk bieden op rehabilitatie en herintegratie. Als je je afvraagt waarom we een groepsfoto van een willekeurige McDonald's crew naast onze tekst hebben, dan is het antwoord simpel: omdat we anders zijn!
                <br />
                <br />
                In een wereld waar gevangenissen vaak geassocieerd worden met beperkingen en strakke regels, geloven wij in een andere aanpak. We begrijpen dat iedereen fouten kan maken en dat ware verandering begint met begrip en ondersteuning.
                <br />
                <br />
                Ons toegewijde "McLockup"-team (zoals we onszelf graag noemen) bestaat uit individuen met een passie voor herstel en groei. Onze filosofie is gebaseerd op het idee dat iedereen het potentieel heeft om te veranderen, ongeacht hun verleden. We hebben een diverse en inclusieve gemeenschap gecreëerd waarin we samenwerken aan het bouwen van een betere toekomst.
                <br />
                <br />
                Onze programma's omvatten unieke elementen, zoals teamwork, communicatie en klanttevredenheid, geleend van de wereld van fastfood. We geloven dat deze vaardigheden niet alleen van waarde zijn binnen de muren van onze gevangenis, maar ook bijdragen aan een succesvolle terugkeer naar de samenleving.
                <br />
                <br />
                Dus, of je nu een Big Mac-specialist of een frietkunstenaar bent, bij ons vind je een gemeenschap die je ondersteunt, motiveert en uitdaagt om je ware potentieel te bereiken.
                <br />
                <br />
                Welkom bij onze "McLockup"-familie, waar we samenwerken aan een smakelijke toekomst vol mogelijkheden.
            </p>
        </div>
    </div>
</div>
@endsection