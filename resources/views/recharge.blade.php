<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('style')
    <title>Créer un Compte - TransfertExpress</title>
</head>
<body class="bg-gray-100 min-h-screen">
    @include('nav')

    <div class="max-w-lg mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-green-600 text-center mb-6">Créer un compte</h2>



        <form action="{{ route('recharge') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="montant" class="block text-sm font-medium text-gray-700">Montant initial</label>
                <input type="number" name="montant" id="montant" required min="0"
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-green-500 text-white font-semibold py-2 rounded-lg hover:bg-green-600 transition duration-200">
                Enregistrer le compte
            </button>
        </form>
    </div>
</body>
</html>
