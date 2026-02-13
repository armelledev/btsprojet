<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des Présences - Liste des Employés') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase italic">Nom</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase italic">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase italic">Statut Aujourd'hui</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase italic">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-medium">{{ $user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $user->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($user->presences->first())
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ ucfirst($user->presences->first()->statut) }} ({{ $user->presences->first()->heure_arrivee }})
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Absent / Non pointé
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                    @if(!$user->presences->first())
                                        <form action="{{ route('presences.store') }}" method="POST" class="inline">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <input type="hidden" name="statut" value="present">
                                            <button type="submit" class="text-indigo-600 hover:text-indigo-900 font-bold">
                                                Pointer l'arrivée
                                            </button>
                                        </form>
                                    @else
                                        <span class="text-gray-400">Déjà validé</span>
                                    @endif
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