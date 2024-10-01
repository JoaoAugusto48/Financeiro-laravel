<?php

namespace App\Services\Messages;

use App\Models\AccountHolder;

class AccountHolderMessageService
{
    public static function create(AccountHolder $accountHolder): string
    {
        return "Account Holder '{$accountHolder->name}' criado com sucesso";
    }

    public static function update(AccountHolder $accountHolder): string
    {
        return "Account Holder '{$accountHolder->name}' atualizado com sucesso";
    }

    public static function delete(AccountHolder $accountHolder): string
    {
        return "Holder '{$accountHolder->name}' removido com sucesso.";
    }

    public static function errorException(AccountHolder $accountHolder): string
    {
        return "Holder '{$accountHolder->name}' não pode ser removido, pois há relações cadastradas em outro locais.";
    }
}