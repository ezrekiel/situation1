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
                    <form method="post" action="{{route('calendar.store')}}" class="membresform">
                        @csrf

                        <label>AM_PM</label>
                        <select name="am_pm">
                            <option>--</option>
                            <option value="am">AM</option>
                            <option value="pm">PM</option>
                        </select>
                        <br>
                        <label>Equipe</label>
                        <select name="id_team">
                            <option value="0">Pas d'équipe</option>
                            @foreach($teams as $team)
                                <option value="{{$team->id}}">{{$team->team_name}}</option>
                            @endforeach
                        </select>
                        <label>Zones</label>
                        <select name="id_zone">
                            <option value="0">Pas de zone</option>
                            @foreach($zones as $zone)
                                <option value="{{$zone->id}}">{{$zone->zone_name}}</option>
                            @endforeach
                        </select>
                        <label>Date</label>
                        <input type="text" id="datepicker">

                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            var $j = jQuery.noConflict();
            $j( "#datepicker" ).datepicker({
                altField: "#datepicker",
                closeText: 'Fermer',
                prevText: 'Précédent',
                nextText: 'Suivant',
                currentText: 'Aujourd\'hui',
                monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
                dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
                dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                weekHeader: 'Sem.',
                dateFormat: 'dd-mm-yy'
            });
        });
    </script>
</x-app-layout>
