<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/transaction', [TransactionController::class, 'transaction_all'])->name('all transaction.index');
Route::post('/transaction', [TransactionController::class, 'transaction_traitement'])->name('all transaction.index');
Route::get('/depot', [TransactionController::class, 'trandepot'])->name('depot.index');
Route::get('/competer', [TransactionController::class, 'trancompleter'])->name('completer.index');
Route::get('/enattente', [TransactionController::class, 'tranenattente'])->name('en attente.index');
Route::get('/retirer', [TransactionController::class, 'tranretirer'])->name('retirer.index');
Route::get('/onhold', [TransactionController::class, 'tranonhold'])->name('onhold.index');
Route::get('/formulaire',[TransactionController::class, 'tranformulaire'])->name('transaction.formulaire');