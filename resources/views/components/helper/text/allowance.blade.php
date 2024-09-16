<span>
    R$ {{ $allowance->value }} 
    - 
    {{ $allowance->title }} 
    |
    {{ $allowance->account->accountHolder->name }} 
    @isset($allowance->relatedHolder) 
        || 
        {{ $allowance->relatedHolder->name }} 
    @endisset
    >
    {{ $kindTransaction }} 
</span>