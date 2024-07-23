<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankFormRequest;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Bank $bank)
    {
        $banks = Bank::paginate(20);

        return view('bank.index')
                ->with('banks', $banks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BankFormRequest $request)
    {
        $bank = new Bank();
        $bank->number = $request->numero;
        $bank->name = $request->nome;
        $bank-> abbreviation = strtoupper($request->sigla);
        
        $bank->save();

        return to_route('banks.index')
                    ->with('mensagem.sucesso', "Banco '{$bank->name}' criado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        return view('bank.show')->with('bank', $bank);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bank $bank)
    {
        return view('bank.edit')->with('bank', $bank);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BankFormRequest $request, string $id)
    {
        $bank = Bank::find($id);
        $bank->number = $request->numero;
        $bank->name = $request->nome;
        $bank->abbreviation = strtoupper($request->sigla);
        
        $bank->save();
        
        return to_route('banks.index')
                    ->with('mensagem.sucesso', "Banco '{$bank->name}' atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
