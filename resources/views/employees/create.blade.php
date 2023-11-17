@extends('layouts.dashboard')

@section('content')

    <div class="flex flex-row justify-between">
        <h1 class="text-4xl font-bold pb-10"> Werknemer aanmaken</h1>
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
                <th>Password</th>
                <th></th>
            </tr>
            </thead>
            <form method="POST" action="{{ route('employee.store') }}">
                @csrf
                <tbody>
                    <tr>
                        <!-- <td>
                            <div class="flex items-center space-x-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-12 h-12">
                                        <img src="https://media.discordapp.net/attachments/1148506794063306853/1151105053499858995/51Ee9UDu3iL._AC_UF8941000_QL80_.jpg?width=386&height=560"/>
                                    </div>
                                </div>
                            </div>
                        </td> -->
                        
                        <td>
                            <input name="name" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                        </td>
                        <td>
                            <input name="email" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                        </td>
                        <td>
                        <select name="role" class="input input-bordered w-full max-w-xs">
                            <option value="manager">manager</option>
                            <option value="worker">worker</option>
                        </select>
                        </td>
                        <td>
                            <input name="password" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
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
