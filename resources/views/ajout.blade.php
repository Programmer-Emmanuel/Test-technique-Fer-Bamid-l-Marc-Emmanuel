<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('style')
    <title>Ajout transaction</title>
</head>
<body class="bg-gray-100 min-h-screen">
    @include('nav')

    <div class="max-w-xl mx-auto mt-12 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-green-600 text-center mb-6">Ajouter une transaction</h1>
        @if(session('error'))
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg shadow">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg shadow">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('ajoutPost') }}" method="POST" class="space-y-5">
            @csrf


            <div>
                <label for="envoyeur" class="block text-sm font-medium text-gray-700">Nom de l’envoyeur</label>
                <input type="text" id="envoyeur" name="envoyeur" value="{{old('envoyeur')}}" required 
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none">
            </div>

            <div>
                <label for="receveur" class="block text-sm font-medium text-gray-700">Nom du receveur</label>
                <input type="text" id="receveur" name="receveur" value="{{old('receveur')}}" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none">
            </div>

            <div>
                <label for="montant" class="block text-sm font-medium text-gray-700">Montant</label>
                <input type="number" id="montant" name="montant" required min="1"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none">
            </div>

            <button type="submit"
                    class="w-full bg-green-500 text-white font-semibold py-2 rounded-lg hover:bg-green-600 transition duration-200">
                Enregistrer la transaction
            </button>
        </form>
    </div>
</body>
</html>
