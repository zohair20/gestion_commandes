@extends('layouts.app')

@section('content')
<div class="mb-6 flex justify-between items-start">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Facture N°: {{ $commande->id }}</h1>
        <p class="text-gray-500">Date: {{ $commande->DATECOM }}</p>
    </div>
    <div class="text-right border-l-4 border-blue-600 pl-4">
        <h2 class="font-bold text-lg">Client: {{ $commande->client->NOMC }}</h2>
        <p class="text-gray-600">Ville: {{ $commande->client->VILC }}</p>
    </div>
</div>

<table class="w-full border-collapse bg-white mb-6">
    <thead>
        <tr class="bg-gray-100 text-gray-700">
            <th class="p-3 border text-left">Article</th>
            <th class="p-3 border text-center">Prix Unitaire</th>
            <th class="p-3 border text-center">Quantité</th>
            <th class="p-3 border text-right">Sous-total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr class="hover:bg-gray-50">
            <td class="p-3 border">{{ $article->NOMA }}</td>
            <td class="p-3 border text-center">{{ number_format($article->PRIXVENTE, 2) }} DH</td>
            <td class="p-3 border text-center">{{ $article->pivot->qtecommande }}</td>
            <td class="p-3 border text-right font-semibold">
                {{ number_format($article->PRIXVENTE * $article->pivot->QTECOMD, 2) }} DH
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr class="bg-blue-50">
            <td colspan="3" class="p-4 border text-right font-bold text-xl text-gray-700">TOTAL À PAYER:</td>
            <td class="p-4 border text-right font-bold text-2xl text-blue-700">
                {{ number_format($total, 2) }} DH
            </td>
        </tr>
    </tfoot>
</table>

<div class="flex gap-4">
    <a href="{{ route('commandes.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded shadow hover:bg-gray-600">
        ← Retour aux commandes
    </a>
    <button onclick="window.print()" class="bg-blue-600 text-white px-6 py-2 rounded shadow hover:bg-blue-700">
        Imprimer la facture
    </button>
</div>
@endsection