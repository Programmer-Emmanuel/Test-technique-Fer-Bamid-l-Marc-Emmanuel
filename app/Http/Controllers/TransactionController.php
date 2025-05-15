<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function rechargeView(){
        return view('recharge');
    }
public function recharge(Request $request)
{
    $request->validate([
        'montant' => 'required|numeric|min:1',
    ]);

    $compte = Compte::where('user_id', auth()->id())->first();

    if ($compte) {
        $compte->montant += $request->montant;
    } else {
        $compte = new Compte();
        $compte->user_id = auth()->id();
        $compte->montant = $request->montant;
    }

    $compte->save();

    return redirect('/transactions')->with('success', 'Compte mis à jour.');
}

    public function liste(){
        $transactions = Transaction::where('user_id', auth()->id())->get();
        $comptes = Compte::where('user_id', auth()->id())->get();
        return view('liste', compact('transactions', 'comptes'));
    }

    public function ajoutView(){
        return view('ajout');
    }

    public function ajoutPost(Request $request){
 $request->validate([
        'envoyeur' => 'required|string',
        'receveur' => 'required|string',
        'montant' => 'required|numeric|min:1',
    ]);

    $compte = Compte::where('user_id', auth()->id())->first();

    if (!$compte || $compte->montant < $request->montant) {
        return back()->withInput()->with('error', 'Solde insuffisant pour effectuer cette transaction.');
    }

    // Déduction du solde
    $compte->montant -= $request->montant;
    $compte->save();

    // Enregistrement de la transaction
    $transaction = new Transaction();
    $transaction->user_id = auth()->id();
    $transaction->envoyeur = $request->envoyeur;
    $transaction->receveur = $request->receveur;
    $transaction->montant = $request->montant;
    $transaction->save();

    return redirect('/transactions')->with('success', 'Transaction effectuée avec succès.');
    }
}
