@extends('layouts.app')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-6 text-blue-800">{{ $article->NOMA }}</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-t pt-4">
        <div class="space-y-2">
            <p><span class="font-bold">ID Article:</span> {{ $article->id }}</p>
            <p><span class="font-bold">Couleur:</span> {{ $article->COULEUR }}</p>
            <p><span class="font-bold">Quantité en Stock:</span> 
                <span class="{{ $article->QTESTK < 5 ? 'text-red-600 font-bold' : 'text-green-600' }}">
                    {{ $article->QTESTK }}
                </span>
            </p>
        </div>
        
        <div class="space-y-2">
            <p><span class="font-bold">Prix d'Achat:</span> {{ $article->PRIXACHAT }} DH</p>
            <p><span class="font-bold">Prix de Vente:</span> {{ $article->PRIXVENTE }} DH</p>
            <p class="text-blue-600 font-bold"><span class="text-black">Marge:</span> {{ $article->PRIXVENTE - $article->PRIXACHAT }} DH</p>
        </div>
    </div>

    <div class="mt-8 flex gap-4">
        <a href="{{ route('articles.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Retour</a>
        <a href="{{ route('articles.edit', $article->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Modifier</a>
    </div>
</div>
@endsection