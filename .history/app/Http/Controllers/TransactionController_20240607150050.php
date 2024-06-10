<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
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
        $_REQUEST->validate([
            'commande'=>'required',
            'u'=>'required',
            'commande'=>'required',
            'commande'=>'required',
            'commande'=>'required',
        ])
        return view('all transaction.index');
    }
    

}

