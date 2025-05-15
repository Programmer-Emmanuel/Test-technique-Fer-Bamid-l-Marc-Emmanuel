<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('style') 
    <title>Connexion - Transfert d’Argent</title>
</head>
<body>
        @include('nav')

<div class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-green-600 text-center mb-6">
            Connexion à votre compte
        </h2>

        <form action="/login" method="post" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
                <input type="email" name="email" id="email" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" name="password" id="password" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>

            <button type="submit"
                    class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition duration-200">
                Se connecter
            </button>
        </form>

        <p class="text-sm text-center text-gray-600 mt-6">
            Pas encore inscrit ?
            <a href="{{route('create')}}" class="text-green-600 font-medium hover:underline">Créer un compte</a>
        </p>
    </div>

</div>
</body>
</html>
