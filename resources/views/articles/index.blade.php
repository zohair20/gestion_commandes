{{-- @extends('layouts.app')

@section('content')
<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Liste des Articles</h1>
    <a href="{{ route('articles.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Nouveau Article</a>
</div>

<table class="w-full text-left border-collapse">
    <thead>
        <tr class="border-b">
            <th class="p-2">ID</th>
            <th class="p-2">Désignation</th>
            <th class="p-2">Prix Vente</th>
            <th class="p-2">Stock</th>
            <th class="p-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr class="border-b hover:bg-gray-50">
            <td class="p-2">{{ $article->id }}</td>
            <td class="p-2">{{ $article->NOMA }}</td>
            <td class="p-2">{{ $article->PRIXVENTE }} DH</td>
            <td class="p-2">{{ $article->QTESTK }}</td>
            <td class="p-2 flex gap-2">
                <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-600">Modifier</a>
                
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Supprimer ?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-red-600">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $articles->links() }} </div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Liste des Articles</h1>
    
    <a href="{{ route('articles.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg shadow transition">
        + Ajouter un Article
    </a>
</div>

<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse bg-white shadow-sm rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-700 uppercase text-sm">
            <tr>
                <th class="p-4 border-b">ID</th>
                <th class="p-4 border-b">Désignation</th>
                <th class="p-4 border-b">Prix Vente</th>
                <th class="p-4 border-b">Stock</th>
                <th class="p-4 border-b text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600">
            @foreach($articles as $article)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4">{{ $article->id }}</td>
                <td class="p-4 font-semibold">{{ $article->NOMA }}</td>
                <td class="p-4">{{ $article->PRIXVENTE }} DH</td>
                <td class="p-4">
                    <span class="{{ $article->QTESTK < 10 ? 'bg-red-100 text-red-700' : 'bg-green-100 text-green-700' }} px-2 py-1 rounded-full text-xs font-bold">
                        {{ $article->QTESTK }}
                    </span>
                </td>
                <td class="p-4">
                    <div class="flex justify-center gap-3">

                        <a href="{{ route('articles.show', $article) }}"
                        class="px-4 py-2 rounded-lg bg-blue-500 text-white font-medium shadow hover:bg-blue-600 transition">
                            Afficher
                        </a>

                        <a href="{{ route('articles.edit', $article) }}"
                        class="px-4 py-2 rounded-lg bg-yellow-500 text-white font-medium shadow hover:bg-yellow-600 transition">
                            Modifier
                        </a>

                        <form action="{{ route('articles.destroy', $article) }}"
                            method="POST"
                            onsubmit="return confirm('Voulez-vous vraiment supprimer cet article ?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="px-4 py-2 rounded-lg bg-red-500 text-white font-medium shadow hover:bg-red-600 transition">
                                Supprimer
                            </button>
                        </form>

                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $articles->links() }}
</div>
@endsection