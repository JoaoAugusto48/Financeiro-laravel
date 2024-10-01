<?php

namespace App\Services\Messages;

use App\Models\Bank;

class BankMessageService
{
    public static function create(Bank $bank): string
    {
        return "Banco '{$bank->name}' criado com sucesso";
    }

    public static function update(Bank $bank): string
    {
        return "Banco '{$bank->name}' atualizado com sucesso";
    }
    
    public static function delete(Bank $bank): string
    {
        return "Banco '{$bank->name}' removido com sucesso.";
    }

    public static function updateDenied(Bank $bank): string
    {
        return "Banco '{$bank->name}' não pode ser atualizado.";
    }

    public static function deleteDenied(Bank $bank): string
    {
        return "O banco '{$bank->name}' não pode ser excluido, há informações cadastradas em outros lugares.";
    }
}