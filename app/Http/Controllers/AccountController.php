<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountFormRequest;
use App\Models\Account;
use App\Models\AccountHolder;
use App\Models\Bank;
use App\Models\Subscription;
use App\Models\Transaction;
use App\Services\Messages\AccountMessageService;
use App\Services\MessageService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Account $account)
    {
        $accounts = Account::paginate(20);
        $accountBalances = Account::sum('balance');

        return view('auth.accounts.index')
                ->with('accounts', $accounts)
                ->with('accountBalances', $accountBalances)
                ->with('messages', session(MessageService::$mensagem));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accountHolders = AccountHolder::orderBy('name')->get();
        $banks = Bank::orderBy('name')->get();
        return view('auth.accounts.create')
                ->with('accountHolders', $accountHolders)
                ->with('banks', $banks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccountFormRequest $request)
    {
        try {
            $account = new Account();
            $account->accountHolder_id = $request->titular;
            $account->bank_id = $request->banco;
            $account->accountNumber = $request->numeroConta;
            $account->deposit($request->saldoAtual);
    
            $accountHolder = AccountHolder::find($request->titular);
            $accountHolder->linkAccount = true;
            
            $account->save();
            $accountHolder->save();

            MessageService::success(AccountMessageService::create($account));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }
        return to_route('auth.accounts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        $transactions = Transaction::where('account_id', $account->id)->get();

        return view('auth.accounts.show')
                    ->with('account', $account)
                    ->with('transactions', $transactions);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        $accountHolders = AccountHolder::orderBy('name')->get();
        $banks = Bank::orderBy('name')->get();
        return view('auth.accounts.edit')
                ->with('account', $account)
                ->with('accountHolders', $accountHolders)
                ->with('banks', $banks);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccountFormRequest $request, string $id)
    {
        try {
            $account = Account::find($id);
            $account->accountNumber = $request->numeroConta;
    
            $account->save();
            MessageService::success(AccountMessageService::update($account));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }
        return to_route('auth.accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account, Request $request)
    {
        try {
            $subscription = Subscription::where('account_id', $account->id)->first(); 
            $transaction = Transaction::where('account_id', $account->id)->first();
            if(!is_null($subscription) || !is_null($transaction)){
                throw new \Exception();
            }
            
            $account->delete();

            MessageService::success(AccountMessageService::delete($account));
        } catch (\Exception $ex) {
            MessageService::warning(AccountMessageService::errorException($account));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }
        return to_route('auth.accounts.index');
    }
}
