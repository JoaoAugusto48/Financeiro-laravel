<?php

namespace App\Http\Controllers;

use App\Enums\TransactionEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\AllowanceFormRequest;
use App\Models\AccountHolder;
use App\Models\Allowance;
use App\Models\User;
use Illuminate\Http\Request;

class AllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Allowance $allowance)
    {
        $allowances = Allowance::all();
        $success = session('mensagem.success');
        $error = session('mensagem.error');

        return view('allowances.index')
                ->with('allowances', $allowances)
                ->with('success', $success)
                ->with('error', $error);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accountHolders = AccountHolder::all();
        $transactions = TransactionEnum::cases();
        
        return view('allowances.create')
                    ->with('transactions', $transactions)
                    ->with('accountHolders', $accountHolders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AllowanceFormRequest $request)
    {
        $allowance = new Allowance();
        $allowance->title = $request->titulo;
        $allowance->value = $request->valor;
        $allowance->kindTransaction = $request->tipoTransacao;
        $allowance->descriptionReason = $request->descricao;
        $allowance->account_id = User::first()->id;
        $allowance->accountHolder_id = $request->contaRelacionada;

        $allowance->save();


        return to_route('allowances.index')
                ->with('mensagem.success', "Mensalidade '$allowance->title' criada com sucesso");
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
    public function update(AllowanceFormRequest $request, string $id)
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
