<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('teams.create')}}" class="btn btn-primary">Ajouter</a>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nom</td>
                            <td>Modifier</td>
                            <td>Supprimer</td>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <td>{{$team->id}}</td>
                                <td>{{$team->team_name}}</td>

                                <td><a href="{{route('teams.edit', $team->id)}}" class="btn btn-primary">Modifier</a></td>
                                <td>
                                    <form action="{{route('teams.destroy', $team->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
