<x-layout title="{{ $accountHolder->name }}" pageName="Holder">

    <div class="row mb-2">
        <div class="col">
            <x-buttons.return :href="route('holders.index')" />
        </div>
    </div>

    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Relacionar esse registo com as <mark>Transações</mark>, <mark>Mensalidades</mark> e <mark>Contas</mark>
                do Account Holder</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Atenciosamente <cite title="Source Title">Equipe de Desenvolvimento</cite>
        </figcaption>
    </figure>

    {{-- Nav tabs --}}
    {{-- <div class="card text-center">
        <div class="card-header"> --}}
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#1">Transações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#2">Mensalidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#3">Contas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        {{-- </div>
    </div> --}}

    <div class="row">
        Accounts
        @foreach ($accounts as $account)
            <x-cards.account-card :account="$account"/>
        @endforeach
    </div>
    <div class="row">
        Transactions
        @foreach ($transactions as $transaction)
            <x-cards.transaction-card :transaction="$transaction"/>
        @endforeach
    </div>
    <div class="row">
        Allowances
        @foreach ($allowances as $allowance)
            <x-cards.allowance-card :allowance="$allowance"/>
        @endforeach
    </div>
</x-layout>
