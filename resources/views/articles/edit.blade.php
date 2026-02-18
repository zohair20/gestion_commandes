@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ isset($article) ? 'Modifier' : 'Ajouter' }} Article</h1>

<form action="{{ isset($article) ? route('articles.update', $article) : route('articles.store') }}" method="POST">
    @csrf
    @if(isset($article)) @method('PUT') @endif

    <div class="grid gap-4">
        <div>
            <label>Désignation (NOMA)</label>
            <input type="text" name="NOMA" value="{{ old('NOMA', $article->NOMA ?? '') }}" class="w-full border p-2 rounded">
            @error('NOMA') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label>Prix Achat</label>
                <input type="number" name="PRIXACHAT" step="0.01" value="{{ old('PRIXACHAT', $article->PRIXACHAT ?? '') }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label>Prix Vente</label>
                <input type="number" name="PRIXVENTE" step="0.01" value="{{ old('PRIXVENTE', $article->PRIXVENTE ?? '') }}" class="w-full border p-2 rounded">
            </div>
        </div>

        <div>
            <label>Quantité Stock (QTESTK)</label>
            <input type="number" name="QTESTK" value="{{ old('QTESTK', $article->QTESTK ?? '') }}" class="w-full border p-2 rounded">
        </div>
        <div>
            <label>Couleur</label>
            <input type="text" name="COULEUR" value="{{ old('COULEUR', $article->COULEUR ?? '') }}" class="w-full border p-2 rounded">
            @error('COULEUR') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white p-2 rounded mt-4">Enregistrer</button>
    </div>
</form>
@endsection