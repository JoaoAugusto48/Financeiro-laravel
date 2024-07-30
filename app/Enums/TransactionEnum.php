<?php

namespace App\Enums;

enum TransactionEnum: string
{
    case Deposit = 'Deposito';
    case Withdraw = 'Saque';
}