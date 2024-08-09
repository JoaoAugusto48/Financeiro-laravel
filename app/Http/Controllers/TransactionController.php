<?php

namespace App\Http\Controllers;

use App\Enums\TransactionEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionFormRequest;
use App\Models\Account;
use App\Models\AccountHolder;
use App\Models\Allowance;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Transaction $transaction)
    {
        $transactions = Transaction::all();
        $kindTransactions = ['deposit' => TransactionEnum::Deposit];
        $success = session('mensagem.success');
        $error = session('mensagem.error');

        return view('transactions.index')
                ->with('transactions', $transactions)
                ->with('kindTransactions', $kindTransactions)
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
        $allowances = Allowance::all();
        $today = Carbon::today();

        return view('transactions.create')
                ->with('transactionsEnum', $transactionsEnum)
                ->with('relatedAccounts', $relatedAccounts)
                ->with('accountHolders', $accountHolders)
                ->with('allowances', $allowances)
                ->with('today', $today);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransactionFormRequest $request)
    {
        try {
            $transaction = new Transaction();
        $transaction->value = $request->valor;
        $transaction->kindTransaction = TransactionEnum::from($request->tipoTransacao)->name;
        $transaction->description = $request->descricao;
        $transaction->dateTransaction = $request->data;
        $transaction->account_id = $request->titular;
        $transaction->relatedHolder_id = $request->contaRelacionada;

        $account = Account::find($transaction->account_id);

        if($transaction->kindTransaction == TransactionEnum::Deposit->name) {
            $account->deposit($transaction->value);            
        } elseif ($transaction->kindTransaction == TransactionEnum::Withdraw->name) {
            $account->withdraw($transaction->value);
        } else {
            throw new \Exception();
        }

        $transaction->save();
        $account->save();

        return to_route('transactions.index')
                ->with('mensagem.success', "Transação '$transaction->value' criada com sucesso");
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
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
