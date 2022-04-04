<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('zones.create')}}" class="btn btn-primary">Ajouter</a>
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
                        @foreach($zones as $zone)
                            <tr>
                                <td>{{$zone->id}}</td>
                                <td>{{$zone->zone_name}}</td>

                                <td><a href="{{route('zones.edit', $zone->id)}}" class="btn btn-primary">Modifier</a></td>
                                <td>
                                    <form action="{{route('zones.destroy', $zone->id)}}" method="post">
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
