<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountHolderController;
use App\Http\Controllers\AllowanceController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
// Route::get('/', [AccountController::class, 'index'])->name('home');

Route::resources([
    'accounts' => AccountController::class,
    'holders' => AccountHolderController::class,
    'allowances' => AllowanceController::class,
    'banks' => BankController::class,
    'transactions' => TransactionController::class,
]);

Route::prefix('banks')->group(function () {
    Route::post('search', [BankController::class, 'search'])->name('banks.search');
    Route::get('{sort}/{type}', [BankController::class, 'index'])->name('banks.order');
});