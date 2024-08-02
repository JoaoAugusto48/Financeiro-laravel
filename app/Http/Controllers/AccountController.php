<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountFormRequest;
use App\Models\Account;
use App\Models\AccountHolder;
use App\Models\Allowance;
use App\Models\Bank;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Account $account)
    {
        $accounts = Account::all();
        $success = session('mensagem.success');
        $error = session('mensagem.error');

        return view('accounts.index')
                ->with('accounts', $accounts)
                ->with('success', $success)
                ->with('error', $error);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accountHolders = AccountHolder::orderBy('name')->get();
        $banks = Bank::orderBy('name')->get();
        return view('accounts.create')
                ->with('accountHolders', $accountHolders)
                ->with('banks', $banks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccountFormRequest $request)
    {
        $account = new Account();
        $account->accountHolder_id = $request->titular;
        $account->bank_id = $request->banco;
        $account->accountNumber = $request->numeroConta;
        $account->deposit($request->saldoAtual);

        $accountHolder = AccountHolder::find($request->titular);
        $accountHolder->linkAccount = true;
        
        $account->save();
        $accountHolder->save();

        return to_route('accounts.index')
                ->with('mensagem.success', "Account '{$account->accountNumber}' criada com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        return view('accounts.show')->with('account', $account);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        $accountHolders = AccountHolder::orderBy('name')->get();
        $banks = Bank::orderBy('name')->get();
        return view('accounts.edit')
                ->with('account', $account)
                ->with('accountHolders', $accountHolders)
                ->with('banks', $banks);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccountFormRequest $request, string $id)
    {
        $account = Account::find($id);
        $account->accountNumber = $request->numeroConta;

        $account->save();

        return to_route('accounts.index')
                ->with('mensagem.success', "Account '{$account->accountNumber}' atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account, Request $request)
    {
        try {
            $allowance = Allowance::where('account_id', $account->id)->first(); 
            $transaction = Transaction::where('account_id', $account->id)->first();
            if(!is_null($allowance) || !is_null($transaction)){
                throw new \Exception();
            }
            
            $account->delete();

            return to_route('accounts.index')
                    ->with('mensagem.success', "Conta '{$account->accountNumber}' removida com sucesso.");
        } catch (\Throwable $th) {
            return to_route('accounts.index')
                    ->with('mensagem.error', "A conta '{$account->accountNumber}' não pode ser excluida, há informações cadastradas em outros lugares.");
        }
    }
}
