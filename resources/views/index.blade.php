<x-layout title="{{ __('messages.system_name') }}">

    <div class="row row-cols-4">
        <x-cards.index title="{{ __('messages.objects.accounts') }}" href="{{ route('accounts.index') }}">
            {{ __('messages.page_index.card_text', ['object' => __('messages.objects.accounts')]) }}
        </x-cards.index>
        <x-cards.index title="{{ __('messages.objects.allowances') }}" href="{{ route('allowances.index') }}">
            {{ __('messages.page_index.card_text', ['object' => __('messages.objects.allowances')]) }}
        </x-cards.index>
        <x-cards.index title="{{ __('messages.objects.banks') }}" href="{{ route('banks.index') }}">
            {{ __('messages.page_index.card_text', ['object' => __('messages.objects.banks')]) }}
        </x-cards.index>
        <x-cards.index title="{{ __('messages.objects.account_holders') }}" href="{{ route('holders.index') }}">
            {{ __('messages.page_index.card_text', ['object' => __('messages.objects.account_holders')]) }}
        </x-cards.index>
        <x-cards.index title="{{ __('messages.objects.transactions') }}" href="{{ route('transactions.index') }}">
            {{ __('messages.page_index.card_text', ['object' => __('messages.objects.transactions')]) }}
        </x-cards.index>
    </div>
</x-layout>
