<?php

namespace App\Http\Controllers;

use App\Enums\TransactionEnum;
use App\Http\Controllers\Controller;
use App\Models\AccountHolder;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Transaction $transaction)
    {
        $transactions = Transaction::all();
        $kindTransactionsDeposit = TransactionEnum::Withdraw->name;
        $success = session('mensagem.success');
        $error = session('mensagem.error');

        return view('transactions.index')
                ->with('transactions', $transactions)
                ->with('kindTransactionsDeposit', $kindTransactionsDeposit)
                ->with('success', $success)
                ->with('error', $error);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accountHolders = AccountHolder::where('linkAccount', true)->get();
        $relatedAccounts = AccountHolder::where('linkAccount', false)->get();
        $transactionsEnum = TransactionEnum::cases();

        return view('transactions.create')
                ->with('transactionsEnum', $transactionsEnum)
                ->with('relatedAccounts', $relatedAccounts)
                ->with('accountHolders', $accountHolders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
