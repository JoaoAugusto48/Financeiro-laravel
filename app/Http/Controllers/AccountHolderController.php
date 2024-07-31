<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountHolderFormRequest;
use App\Models\AccountHolder;
use App\Models\User;
use Illuminate\Http\Request;

class AccountHolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AccountHolder $accountHolder)
    {
        $accountHolders = AccountHolder::all();
        $success = session('mensagem.success');
        $error = session('mensagem.error');

        return view('holders.index')
                ->with('accountHolders', $accountHolders)
                ->with('success', $success)
                ->with('error', $error);
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
        $accountHolder = new AccountHolder();
        $accountHolder->name = $request->nome;
        $accountHolder->linkAccount = false;
        $accountHolder->user_id = User::first()->id;
        
        $accountHolder->save();

        return to_route('holders.index')
                ->with('mensagem.success', "Account Holder '$accountHolder->name' criado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(AccountHolder $holder)
    {
        return view('holders.show')->with('accountHolder', $holder);
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
        $accountHolder = AccountHolder::find($id);
        $accountHolder->name = $request->nome;

        $accountHolder->save();

        return to_route('holders.index')
                    ->with('mensagem.success', "Account Holder '{$accountHolder->name}' atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
