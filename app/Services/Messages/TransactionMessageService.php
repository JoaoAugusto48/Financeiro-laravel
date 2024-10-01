<?php

namespace App\Services\Messages;

use App\Models\Transaction;

class TransactionMessageService
{
    public static function create(Transaction $transaction): string
    {
        return "Transação '{$transaction->dateTransaction} - {$transaction->value}' criada com sucesso";
    }

    public static function update(Transaction $transaction): string
    {
        return "Transação '{$transaction->dateTransaction} - {$transaction->value}' atualizada com sucesso";
    }

    public static function delete(Transaction $transaction): string
    {
        return "Transação '{$transaction->dateTransaction} - {$transaction->value}' removida com sucesso.";
    }
}