<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Commerciale</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <nav class="bg-blue-700 shadow-lg p-4 text-white mb-8">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold tracking-wider">APP GESTION</a>
            <div class="space-x-6 flex">
                <a href="{{ route('articles.index') }}" class="hover:text-blue-200 transition">Articles</a>
                <a href="{{ route('commandes.index') }}" class="hover:text-blue-200 transition">Commandes</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg p-6">
            @yield('content')
        </div>
    </main>

</body>
</html>