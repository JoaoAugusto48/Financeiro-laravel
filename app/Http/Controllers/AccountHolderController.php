<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountHolderFormRequest;
use App\Models\Account;
use App\Models\AccountHolder;
use App\Models\Allowance;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AccountHolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AccountHolder $accountHolder)
    {
        $accountHolders = AccountHolder::all();
        $success = session('mensagem.success');
        $error = session('mensagem.error');

        return view('holders.index')
                ->with('accountHolders', $accountHolders)
                ->with('success', $success)
                ->with('error', $error);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('holders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccountHolderFormRequest $request)
    {
        $accountHolder = new AccountHolder();
        $accountHolder->name = $request->nome;
        $accountHolder->linkAccount = false;
        $accountHolder->user_id = User::first()->id;
        
        $accountHolder->save();

        return to_route('holders.index')
                ->with('mensagem.success', "Account Holder '{$accountHolder->name}' criado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(AccountHolder $holder)
    {
        return view('holders.show')->with('accountHolder', $holder);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AccountHolder $holder)
    {
        return view('holders.edit')->with('accountHolder', $holder);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccountHolderFormRequest $request, string $id)
    {
        $accountHolder = AccountHolder::find($id);
        $accountHolder->name = $request->nome;

        $accountHolder->save();

        return to_route('holders.index')
                    ->with('mensagem.success', "Account Holder '{$accountHolder->name}' atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccountHolder $holder, Request $request)
    {
        try {
            $transactions = Transaction::where('relatedHolder_id', $holder->id)->first();
            $allowances = Allowance::where('relatedHolder_id', $holder->id)->first();
            $account = Account::where('accountHolder_id', $holder->id)->first();
    
            if(!is_null($transactions) || !is_null($allowances) || !is_null($account)) {
                throw new \Exception();
            }
            $holder->delete();

            return to_route('holders.index')
                    ->with('mensagem.success', "Holder '{$holder->name}' removido com sucesso.");
        } catch (\Throwable $th) {
            return to_route('holders.index')
                    ->with('mensagem.error', "Holder '{$holder->name}' não pode ser removido, pois há relações cadastradas em outro locais.");
        }
    }
}
