@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Liste des Commandes</h1>
</div>

<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse bg-white shadow-sm rounded-lg overflow-hidden">
        <thead class="bg-blue-600 text-white uppercase text-sm">
            <tr>
                <th class="p-4 border-b">N° Commande</th>
                <th class="p-4 border-b">Client</th>
                <th class="p-4 border-b">Date Commande</th>
                <th class="p-4 border-b text-center">Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-600">
            @foreach($commandes as $commande)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4 font-bold">#{{ $commande->id }}</td>
                <td class="p-4">{{ $commande->client->NOMC }}</td> 
                <td class="p-4">{{ $commande->date_commande }}</td>
                <td class="p-4 text-center">
                    <a href="{{ route('commandes.show', $commande->id) }}" class="bg-blue-100 text-blue-600 px-3 py-1 rounded hover:bg-blue-200 font-medium">
                        Détail de la commande
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $commandes->links() }}
</div>
@endsection