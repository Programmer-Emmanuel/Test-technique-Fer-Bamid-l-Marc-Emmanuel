<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction - TransfertExpress</title>
    @include('style')
</head>
<body class="bg-gray-100 min-h-screen">
    @include('nav')

    <div class="p-4 sm:p-6">
        <div class="flex flex-col sm:flex-row sm:items-center gap-4 mb-6 flex-wrap">
            <a href="{{ route('ajoutView') }}" class="p-3 text-white bg-green-500 hover:bg-green-600 rounded-full flex gap-3 items-center w-full sm:w-auto justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span>Nouveau transfert</span>
            </a>

            <a href="{{ route('rechargeView') }}" class="p-3 text-white bg-green-500 hover:bg-green-600 rounded-full flex gap-3 items-center w-full sm:w-auto justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                </svg>
                <span>Se recharger</span>
            </a>

            @if ($comptes->isNotEmpty())
                <p class="text-green-600 font-bold text-lg sm:text-xl mt-2 sm:mt-0">
                    Solde actuel : {{ $comptes->first()->montant }} FCFA
                </p>
            @else
                <p class="text-red-500 mt-2 sm:mt-0">Aucun compte trouvé</p>
            @endif
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">Envoyeur</th>
                        <th class="px-4 py-3 text-left">Receveur</th>
                        <th class="px-4 py-3 text-left">Montant</th>
                        <th class="px-4 py-3 text-left">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($transactions as $transaction)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $transaction->envoyeur }}</td>
                            <td class="px-4 py-2">{{ $transaction->receveur }}</td>
                            <td class="px-4 py-2">{{ number_format($transaction->montant, 0, ',', ' ') }} FCFA</td>
                            <td class="px-4 py-2">{{ $transaction->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-4 text-center text-gray-500">Aucune transaction enregistrée.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
