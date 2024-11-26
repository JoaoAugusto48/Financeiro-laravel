<?php

namespace App\Http\Controllers;

use App\Models\AccountCategory;
use App\Http\Controllers\Controller;
use App\Services\MessageService;
use Illuminate\Http\Request;

class AccountCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AccountCategory $accountCategory)
    {
        return view('auth.account-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.account-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $accountCategory = new AccountCategory();
            $accountCategory->name = $request->name;
            $accountCategory->description = $request->description;
            $accountCategory->status = true;
            $accountCategory->favorite = false;

            $accountCategory->saveOrFail();

            MessageService::success('');
        } catch (\Throwable $th) {
            MessageService::error($th->getMessage());
        }

        return to_route('auth.account-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AccountCategory $accountCategory)
    {
        return view('auth.account-category.show')
                ->with('accountCategory', $accountCategory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AccountCategory $accountCategory)
    {
        return view('auth.account-category.edit')
                ->with('accountCategory', $accountCategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AccountCategory $accountCategory)
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }

        return to_route('auth.account-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccountCategory $accountCategory)
    {
        //
    }
}
