@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Ajouter un Nouvel Article</h1>

<form action="{{ route('articles.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block">Désignation (NOMA):</label>
        <input type="text" name="NOMA" value="{{ old('NOMA') }}" class="w-full border p-2 rounded">
        @error('NOMA') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block">Prix Achat:</label>
            <input type="number" name="PRIXACHAT" step="0.01" value="{{ old('PRIXACHAT') }}" class="w-full border p-2 rounded">
            @error('PRIXACHAT') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block">Prix Vente:</label>
            <input type="number" name="PRIXVENTE" step="0.01" value="{{ old('PRIXVENTE') }}" class="w-full border p-2 rounded">
            @error('PRIXVENTE') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
    </div>

    <div>
        <label class="block">Quantité Stock (QTESTK):</label>
        <input type="number" name="QTESTK" value="{{ old('QTESTK') }}" class="w-full border p-2 rounded">
        @error('QTESTK') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>
    
    <div>
        <label>Couleur</label>
        <input type="text" name="COULEUR" value="{{ old('COULEUR', $article->COULEUR ?? '') }}" class="w-full border p-2 rounded">
        @error('COULEUR') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded shadow">Enregistrer</button>
</form>
@endsection