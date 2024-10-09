<?php

namespace App\Enums;

enum AccountHolderTypeEnum: string
{
    case PEOPLE = 'Pessoa';
    case COMPANY = 'Empresa';
    case SUPPLIER = 'Fornecedor';
    case CLIENT = 'Cliente';
}