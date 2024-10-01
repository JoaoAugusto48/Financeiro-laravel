<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountHolderFormRequest;
use App\Models\Account;
use App\Models\AccountHolder;
use App\Models\Allowance;
use App\Models\Transaction;
use App\Models\User;
use App\Services\Messages\AccountHolderMessageService;
use App\Services\MessageService;
use Illuminate\Http\Request;

class AccountHolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AccountHolder $accountHolder)
    {
        $accountHolders = AccountHolder::paginate(20);

        return view('holders.index')
                ->with('accountHolders', $accountHolders)
                ->with('messages', session(MessageService::$mensagem));
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
        try {
            $accountHolder = new AccountHolder();
            $accountHolder->name = $request->nome;
            $accountHolder->linkAccount = false;
            $accountHolder->user_id = User::first()->id;
            
            $accountHolder->save();

            MessageService::success(AccountHolderMessageService::create($accountHolder));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }

        return to_route('holders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AccountHolder $holder)
    {
        $accounts = Account::where('accountHolder_id', '=', $holder->id)->get();
        $allowances = Allowance::where('relatedHolder_id', '=', $holder->id)->get();
        $transactions = Transaction::where('relatedHolder_id', '=', $holder->id)->get();
        
        return view('holders.show')
                ->with('accountHolder', $holder)
                ->with('accounts', $accounts)
                ->with('allowances', $allowances)
                ->with('transactions', $transactions);
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
        try {
            $accountHolder = AccountHolder::find($id);
            $accountHolder->name = $request->nome;
    
            $accountHolder->save();

            MessageService::success(AccountHolderMessageService::update($accountHolder));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }

        return to_route('holders.index');
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

            MessageService::success(AccountHolderMessageService::delete($holder));
        } catch (\Exception $ex) {
            MessageService::warning(AccountHolderMessageService::errorException($holder));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }
        return to_route('holders.index');
    }
}
