<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Membres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('membres.store')}}">
                        @csrf
                        <label>Nom</label><br>
                        <input type="text" name="name">
                        <br>
                        <label>Email</label><br>
                        <input type="text" name="email">
                        <br>
                        <label>Mot de passe</label><br>
                        <input type="password" name="password">
                        <br>
                        <label>Profil</label><br>
                        <select name="profile">
                            <option>--</option>
                            <option value="employe">Employé</option>
                            <option value="manager">Manager</option>
                            <option value="admin">Administrateur</option>
                        </select>
                        <br>
                        <label>Equipe</label><br>
                        <select name="id_team">
                            <option value="0">Pas d'équipe</option>
                            @foreach($teams as $team)
                                <option value="{{$team->id}}">{{$team->team_name}}</option>
                            @endforeach
                        </select><br>

                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
