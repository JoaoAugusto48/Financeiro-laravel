<?php

namespace App\Services\Messages;
use App\Models\Account;

class AccountMessageService
{
    public static function create(Account $account): string
    {
        return "Account '{$account->accountNumber}' criada com sucesso";
    }

    public static function update(Account $account): string
    {
        return "Account '{$account->accountNumber}' atualizada com sucesso";
    }

    public static function delete(Account $account): string
    {
        return "Account '{$account->accountNumber}' removida com sucesso.";
    }

    public static function errorException($account): string
    {
        return "Account '{$account->accountNumber}' não pode ser excluida, há informações cadastradas em outros lugares.";
    }
}