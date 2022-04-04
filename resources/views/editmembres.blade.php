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
                    <form method="post" action="{{route('membres.update', $user->id)}}">
                        @csrf
                        @method('PATCH')
                        <label>Nom</label>
                        <input type="text" name="name" value="{{$user->name}}">

                        <label>Email</label>
                        <input type="text" name="email" value="{{$user->email}}">

                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
