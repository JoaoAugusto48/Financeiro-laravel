<span>
    T:{{ $accountHolder->transactions->count() }} 
    A:{{ $accountHolder->allowances->count() }} 
    C:{{ $accountHolder->accounts->count() }}
    | {{ $accountHolder->name }} 
</span>