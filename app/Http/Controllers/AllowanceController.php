<?php

namespace App\Http\Controllers;

use App\Enums\TransactionEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\AllowanceFormRequest;
use App\Models\Allowance;
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
        $transactions = TransactionEnum::cases();
        return view('allowances.create')
                    ->with('transactions', $transactions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AllowanceFormRequest $request)
    {
        dd($request);
        //
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
