@extends('layouts.dashboard')

@section('content')

    <div class="flex flex-row justify-between">
        <h1 class="text-4xl font-bold pb-10">Nieuwsberichten aanmaken</h1>
        <a href="/werknemers" class="btn btn-primary">Annuleren</a>
    </div>
    <div style="overflow: scroll;">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                
            
            <!-- <th>Thumbnail</th> -->
                
                
                <th>Name</th>
                <th>E-mail</th>
                <th>Role</th>
                <th></th>
            </tr>
            </thead>
            <form method="POST" action="/werknemer/{{$user->id}}">
                @method('PUT')
                @csrf
                <tbody>
                <tr>
                    
                    <!-- <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                    <img src=""/>
                                    <input style="display: none" value="" name="thumbnail" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                                </div>
                            </div>
                        </div>
                    </td> -->
                    
                    <td>
                        <input value="{{$user->name}}" name="name" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </td>
                    <td>
                        <input value="{{$user->email}}" name="email" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </td>
                    <td>
                        <select name="role" class="input input-bordered w-full max-w-xs">
                            <option value="{{$user->role}}">{{$user->role}}</option>
                            <option value="manager">manager</option>
                            <option value="worker">worker</option>
                        </select>
                    </td>
                    <th>
                        <button type="submit" class="btn btn-ghost btn-xs">bevestig</button>
                    </th>
                </tr>
                </tbody>
            </form>
        </table>
    </div>

@endsection
