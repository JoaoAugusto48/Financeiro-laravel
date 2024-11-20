<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountHolderController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CashAccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TransactionCategoryController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
// Route::get('/', [AccountController::class, 'index'])->name('home');

Route::resources([
    'accounts' => AccountController::class,
    'account/categories' => AccountController::class,
    'account/holders' => AccountHolderController::class,
    'banks' => BankController::class,
    'cash/account' => CashAccountController::class,
    'categories' => CategoryController::class,
    'subscriptions' => SubscriptionController::class,
    'transactions' => TransactionController::class,
    'transaction/categories' => TransactionCategoryController::class,
]);

Route::prefix('banks')->group(function () {
    Route::post('search', [BankController::class, 'search'])->name('banks.search');
    Route::get('{sort}/{type}', [BankController::class, 'index'])->name('banks.order');
});