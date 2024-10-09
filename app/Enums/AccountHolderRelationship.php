<?php

namespace App\Enums;

enum AccountHolderRelationship: string
{
    case FRIEND = 'Amigo';
    case CLIENT = 'Cliente';
    case SUPPLIER = 'Fornecedor';
    case FAMILY = 'Familiar';
}