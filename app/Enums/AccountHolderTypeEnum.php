<?php

namespace App\Enums;

enum AccountHolderTypeEnum: string
{
    case PEOPLE = 'Pessoa';
    case COMPANY = 'Empresa';
    case BUSINESS = 'Comércio';
    case CLIENT = 'Cliente';
    case ASSOCIATION = 'Associação';
}