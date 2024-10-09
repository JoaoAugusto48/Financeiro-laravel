<?php

namespace App\Enums;

enum TransactionEnum: string
{
    case REVENUE = 'Receita';
    case EXPENSE = 'Despesa';
}