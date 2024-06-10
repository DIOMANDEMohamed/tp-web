<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use Illuminate\Auth\Events\Validated;

class TransactionController extends Controller
{
    
    public function transaction(){
        return view('all transaction.index');
    }

    public function trandepot(){
        return view('depot.index');

    }
    public function trancompleter(){
        return view('completer.index');
    }
    public function tranenattente(){
        return view('en attente.index');
    }
    public function tranretirer(){
        return view('retirer.index');
    }
    public function tranonhold(){
        return view('onhold.index');
    }
    public function tranformulaire(){
        return view('transaction.formulaire');
    }
    public function store(Request $request)
    {
        $request->validate([
            'commande' => 'required|string',
            'utilisateur' => 'required|string',
            'details' => 'required|string',
            'par' => 'required|string',
            'montant' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $transaction = new Transaction();
        $transaction->commande = $request->commande;
        $transaction->utilisateur = $request->utilisateur;
        $transaction->details = $request->details;
        $transaction->pa = $request->details;
        $transaction->montant = $request->montant;
        $transaction->status = $request->status;
        $transaction->save();

        return redirect()->back()->with('status', 'Transaction créée avec succès!');
    }
    
    
        
    

}

