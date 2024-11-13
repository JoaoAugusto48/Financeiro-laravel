<?php

namespace App\Enums;

enum AccountHolderTypeEnum: string
{
    case INDIVIDUAL = 'Pessoa';
    case COMPANY = 'Empresa';
    case BUSINESS = 'Comércio';
    case CLIENT = 'Cliente';
    case ASSOCIATION = 'Associação';
    case ORGANIZATION = 'Organização';
    case GOVERNMENT = 'Governo';
    case SUPPLIER = 'Fornecedor';
    case INVESTOR = 'Investidor';
    case PARTNER = 'Parceiro';
    case FINANCIALINSTITUTION = 'Instituição Financeira';
    case FAMILY = 'Família';
    case EVENTPROJECT = 'Evento/Projeto';
    case TEAMEMPLOYEE = 'Equipe/Funcionário';
}