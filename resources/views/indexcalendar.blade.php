<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendrier') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('calendar.create')}}" class="btn btn-primary">Ajouter</a>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Jour</td>
                            <td>AM_PM</td>
                            <td>Equipe</td>
                            <td>Zone</td>
                            <td>Modifier</td>
                            <td>Supprimer</td>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($calendars as $calendar)
                            <tr>
                                <td>{{$calendar->id}}</td>
                                <td>{{$calendar->day}}</td>
                                <td>{{$calendar->am_pm}}</td>
                                <td>{{$calendar->id_team}}</td>
                                <td>{{$calendar->id_zone}}</td>

                                <td><a href="{{route('calendar.edit', $calendar->id)}}" class="btn btn-primary">Modifier</a></td>
                                <td>
                                    <form action="{{route('calendar.destroy', $calendar->id)}}" method="post">
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
