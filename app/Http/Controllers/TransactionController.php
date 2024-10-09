<?php

namespace App\Http\Controllers;

use App\Enums\TransactionEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionFormRequest;
use App\Models\Account;
use App\Models\AccountHolder;
use App\Models\Allowance;
use App\Models\Transaction;
use App\Services\Messages\TransactionMessageService;
use App\Services\MessageService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Transaction $transaction)
    {
        $transactions = Transaction::paginate(20);

        return view('transactions.index')
                ->with('transactions', $transactions)
                ->with('messages', session(MessageService::$mensagem));
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

            if($transaction->kindTransaction == TransactionEnum::REVENUE->name) {
                $account->deposit($transaction->value);            
            } elseif ($transaction->kindTransaction == TransactionEnum::EXPENSE->name) {
                $account->withdraw($transaction->value);
            } else {
                throw new \Exception();
            }

            $transaction->save();
            $account->save();

            MessageService::success(TransactionMessageService::create($transaction));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }

        return to_route('transactions.index');
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
        try {
            $transaction = Transaction::find($id);
            $transaction->description = $request->descricao;
            $transaction->dateTransaction = $request->data;
            $transaction->relatedHolder_id = $request->contaRelacionada;
            
            $transaction->save();

            MessageService::success(TransactionMessageService::update($transaction));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }

        return to_route('transactions.index');
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
            if($transaction->kindTransaction == TransactionEnum::REVENUE->name) {
                $account->withdraw($transaction->value);
            } elseif ($transaction->kindTransaction == TransactionEnum::EXPENSE->name) {
                $account->deposit($transaction->value);
            } else {
                throw new \Exception();
            }

            $account->save();
            $transactionDelete->delete();

            MessageService::success(TransactionMessageService::delete($transaction));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }

        return to_route('transactions.index');
    }
}
