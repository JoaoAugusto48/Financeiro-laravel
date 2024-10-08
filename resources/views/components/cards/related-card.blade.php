<div class="card p-0 border-0">
    <div class="card-header bg-dark border-0">
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
            @if ($transactions->count() > 0)
            <div class="row row-cols-4">
                @foreach ($transactions as $transaction)
                    <x-cards.transaction-card :transaction="$transaction"/>
                @endforeach
            </div>
            @else
                <div class="row justify-content-center">
                    <div class="col-6">
                        <x-cards.empty-card/>
                    </div>
                </div>
            @endif
        </div>
        <div class="row d-none" id="allowances">
            @if ($allowances->count() > 0)
            <div class="row row-cols-4">
                @foreach ($allowances as $allowance)
                    <x-cards.allowance-card :allowance="$allowance"/>
                @endforeach
            </div>
            @else
                <div class="row justify-content-center">
                    <div class="col-6">
                        <x-cards.empty-card/>
                    </div>
                </div>
            @endif
        </div>
        <div class="row d-none" id="accounts">
            @if ($accounts->count() > 0)
            <div class="row row-cols-4">
                @foreach ($accounts as $account)
                    <x-cards.account-card :account="$account"/>
                @endforeach
            </div>
            @else
                <div class="row justify-content-center">
                    <div class="col-6">
                        <x-cards.empty-card/>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@push('scripts')
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
@endpush