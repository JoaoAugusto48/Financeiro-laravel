<?php

namespace App\Services\Messages;

use App\Models\Allowance;

class AllowanceMessageService
{
    public static function create(Allowance $allowance): string
    {
        return "Mensalidade '$allowance->title' criada com sucesso";
    }

    public static function update(Allowance $allowance): string
    {
        return "Mensalidade '$allowance->title' atualizada com sucesso";
    }

    public static function delete(Allowance $allowance): string
    {
        return "Mensalidade '{$allowance->title}' removida com sucesso.";
    }
}