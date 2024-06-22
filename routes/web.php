<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountHolderController;
use App\Http\Controllers\AllowanceController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AccountController::class, 'index']);

Route::resources([
    'accounts' => AccountController::class,
    'holders' => AccountHolderController::class,
    'allowances' => AllowanceController::class,
    'banks' => BankController::class,
    'transactions' => TransactionController::class,
]);