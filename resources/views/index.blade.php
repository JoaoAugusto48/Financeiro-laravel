<x-layout title="Home">

    <div class="row row-cols-4 mt-2">
        <x-cards.index title="Accounts" href="{{ route('accounts.index') }}">
            See the all accounts on system.
        </x-cards.index>
        <x-cards.index title="Allowances" href="{{ route('allowances.index') }}">
            See the all allowances on system.
        </x-cards.index>
        <x-cards.index title="Banks" href="{{ route('banks.index') }}">
            See the all banks on system.
        </x-cards.index>
        <x-cards.index title="Transactions" href="{{ route('transactions.index') }}">
            See the all transactions on system.
        </x-cards.index>
    </div>
</x-layout>
