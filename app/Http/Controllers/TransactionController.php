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
        $transactions = Transaction::orderByDesc('dateTransaction')->paginate(20);
        $success = session('mensagem.success');
        $error = session('mensagem.error');

        return view('transactions.index')
                ->with('transactions', $transactions)
                ->with('success', $success)
                ->with('error', $error);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accounts = Account::all();
        $relatedAccounts = AccountHolder::where('linkAccount', false)->get();
        $transactionsEnum = TransactionEnum::cases();
        $allowances = Allowance::all();
        $today = Carbon::today();

        return view('transactions.create')
                ->with('transactionsEnum', $transactionsEnum)
                ->with('relatedAccounts', $relatedAccounts)
                ->with('accounts', $accounts)
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
                ->with('mensagem.success', "Transação '{$transaction->dateTransaction} - {$transaction->value}' criada com sucesso");
        } catch (\Throwable $th) {
            return to_route('transactions.index')
                ->with('mensagem.error', "Transação não pode ser criada.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        return view('transactions.show')
                ->with('transaction', $transaction);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        $accounts = Account::all();
        $relatedAccounts = AccountHolder::where('linkAccount', false)->get();
        $allowances = Allowance::all();
        $today = Carbon::today();

        return view('transactions.edit')
                ->with('transaction', $transaction)
                ->with('relatedAccounts', $relatedAccounts)
                ->with('accounts', $accounts)
                ->with('allowances', $allowances)
                ->with('today', $today);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransactionFormRequest $request, string $id)
    {
        $transaction = Transaction::find($id);
        $transaction->description = $request->descricao;
        $transaction->dateTransaction = $request->data;
        $transaction->relatedHolder_id = $request->contaRelacionada;
        
        $transaction->save();

        return to_route('transactions.index')
                ->with('mensagem.success', "Transação '{$transaction->dateTransaction} - {$transaction->value}' atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        try {
            $transactionDelete = Transaction::find($transaction->id);
            
            $account = Account::find($transaction->account_id);

            // with different order to delete
            if($transaction->kindTransaction == TransactionEnum::Deposit->name) {
                $account->withdraw($transaction->value);
            } elseif ($transaction->kindTransaction == TransactionEnum::Withdraw->name) {
                $account->deposit($transaction->value);
            } else {
                throw new \Exception();
            }

            $account->save();
            $transactionDelete->delete();

            return to_route('transactions.index')
                    ->with('mensagem.success', "Transação '{$transaction->dateTransaction} - {$transaction->value}' removida com sucesso.");
        } catch (\Throwable $th) {
            return to_route('transactions.index')
                    ->with('mensagem.error', "Transação '{$transaction->dateTransaction} - {$transaction->value}' não pode ser removida.");
        }
    }
}
