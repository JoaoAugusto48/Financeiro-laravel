<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankFormRequest;
use App\Models\Account;
use App\Models\Bank;
use App\Services\MessageService;
use Exception;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Bank $bank)
    {
        $banks = Bank::paginate(20);

        return view('banks.index')
                ->with('banks', $banks)
                ->with('messages', session(MessageService::$mensagem));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('banks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BankFormRequest $request)
    {
        try {
            $bank = new Bank();
            $bank->number = $request->numero;
            $bank->name = $request->nome;
            $bank->abbreviation = strtoupper($request->sigla);
            $bank->deleteable = true;
            
            $bank->save();
    
            MessageService::success("Banco '{$bank->name}' criado com sucesso");
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }

        return to_route('banks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        return view('banks.show')->with('bank', $bank);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bank $bank)
    {
        return view('banks.edit')->with('bank', $bank);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BankFormRequest $request, string $id)
    {
        try {
            $bank = Bank::find($id);
            if(!$bank->deleteable){
                throw new Exception();
            }
            $bank->number = $request->numero;
            $bank->name = $request->nome;
            $bank->abbreviation = strtoupper($request->sigla);
            
            $bank->save();
            
            MessageService::success("Banco '{$bank->name}' atualizado com sucesso");
        } catch (\Throwable $th) {
            MessageService::error("Banco '{$bank->name}' não pode ser atualizado.");
        }

        return to_route('banks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank, Request $request)
    {
        try {
            $account = Account::where('bank_id', $bank->id)->first();
            if(!is_null($account) || !$bank->deleteable){
                throw new Exception();
            }
            $bank->delete();

            MessageService::success("Banco '{$bank->name}' removido com sucesso.");
        } catch (\Throwable $th) {
            MessageService::error("O banco '{$bank->name}' não pode ser excluido, há informações cadastradas em outros lugares.");
        }

        return to_route('banks.index');
    }

    public function search(Request $request) 
    {
        $search = $request->input('search');
        $banks = Bank::whereAny(['name', 'number', 'abbreviation'], 'LIKE', "%$search%")->paginate(20);
        
        return view('banks.index', ['banks' => $banks, 'search' => $search]);
    }
}
