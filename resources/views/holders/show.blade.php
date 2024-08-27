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
    <div class="card p-0">
        <div class="card-header">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-disabled="true" id="transactions-tab">Transações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" id="allowances-tab">Mensalidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" id="accounts-tab">Contas</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="row" id="transactions">
                <div class="row row-cols-4">
                    @foreach ($transactions as $transaction)
                        <x-cards.transaction-card :transaction="$transaction"/>
                    @endforeach
                </div>
            </div>
            <div class="row d-none" id="allowances">
                <div class="row row-cols-4">
                    @foreach ($allowances as $allowance)
                        <x-cards.allowance-card :allowance="$allowance"/>
                    @endforeach
                </div>
            </div>
            <div class="row d-none" id="accounts">
                <div class="row row-cols-4">
                    @foreach ($accounts as $account)
                        <x-cards.account-card :account="$account"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.nav-link');
        const contents = {
            'transactions-tab': document.getElementById('transactions'),
            'allowances-tab': document.getElementById('allowances'),
            'accounts-tab': document.getElementById('accounts')
        };

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                if (!tab.classList.contains('disabled')) {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active'));
                    
                    // Add active class to the clicked tab
                    tab.classList.add('active');
                    
                    // Hide all content sections
                    for (const content in contents) {
                        contents[content].classList.add('d-none');
                    }
                    
                    // Show the corresponding content section
                    const selectedContent = contents[tab.id];
                    if (selectedContent) {
                        selectedContent.classList.remove('d-none');
                    }
                }
            });
        });
    });
</script>