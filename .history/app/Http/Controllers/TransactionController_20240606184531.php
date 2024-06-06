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
    public funtion tranformulaire(){
        return
    }
}

