<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;

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
    public function transaction_traitement(){
        $request->validate([
            'commande' => 'required',
            'utilisateur' => 'required',
            'detail' => 'required',
            'par' => 'required',
            'montant' => 'required',
            'statut' => 'required',
        ]);
    
        $transaction = new Transaction();
        $transaction->commande = $request->commande;
        $transaction->utilisateur = $request->utilisateur;
        $transaction->detail = $request->detail;
        $transaction->par =$$_REQUEST->par;
        $transaction->montant =$$_REQUEST->montant;
        $transaction->status =$request->status;
        $transaction->save();

        return redirect('all transaction.index')->with('status', 'la transaction a bien été effectuer avec succès.');
    }
    
    
        
    

}

