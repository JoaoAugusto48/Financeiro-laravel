<?php

namespace App\Http\Controllers;

use App\Enums\TransactionEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\AllowanceFormRequest;
use App\Models\Account;
use App\Models\AccountHolder;
use App\Models\Allowance;
use App\Models\User;
use App\Services\Messages\AllowanceMessageService;
use App\Services\MessageService;
use Illuminate\Http\Request;

class AllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Allowance $allowance)
    {
        $allowances = Allowance::paginate(20);

        return view('allowances.index')
                ->with('allowances', $allowances)
                ->with('messages', session(MessageService::$mensagem));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accounts = Account::all();
        $relatedAccounts = AccountHolder::where('linkAccount', false)->get();
        $transactions = TransactionEnum::cases();
        
        return view('allowances.create')
                    ->with('transactions', $transactions)
                    ->with('relatedAccounts', $relatedAccounts)
                    ->with('accounts', $accounts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AllowanceFormRequest $request)
    {
        try {
            $allowance = new Allowance();
            $allowance->title = $request->titulo;
            $allowance->value = $request->valor;
            $allowance->kindTransaction = TransactionEnum::from($request->tipoTransacao)->name;
            $allowance->description = $request->descricao;
            $allowance->account_id = $request->titular;
            $allowance->relatedHolder_id = $request->contaRelacionada;
    
            $allowance->save();
            
            MessageService::success(AllowanceMessageService::create($allowance));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }

        return to_route('allowances.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Allowance $allowance)
    {
        return view('allowances.show')
                ->with('allowance', $allowance);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Allowance $allowance)
    {
        $accounts = Account::all();
        $relatedAccounts = AccountHolder::where('linkAccount', false)->get();
        $transactions = TransactionEnum::cases();
        
        return view('allowances.edit')
                    ->with('allowance', $allowance)
                    ->with('transactions', $transactions)
                    ->with('relatedAccounts', $relatedAccounts)
                    ->with('accounts', $accounts);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AllowanceFormRequest $request, string $id)
    {
        try {
            $allowance = Allowance::find($id);
            $allowance->title = $request->titulo;
            $allowance->value = $request->valor;
            $allowance->kindTransaction = TransactionEnum::from($request->tipoTransacao)->name;
            $allowance->description = $request->descricao;
            $allowance->account_id = $request->titular;
            $allowance->relatedHolder_id = $request->contaRelacionada;
    
            $allowance->save();

            MessageService::success(AllowanceMessageService::update($allowance));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }

        return to_route('allowances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Allowance $allowance, Request $request)
    {
        try {
            $allowance->delete();

            MessageService::success(AllowanceMessageService::delete($allowance));
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }
        
        return to_route('allowances.index');
    }
}
