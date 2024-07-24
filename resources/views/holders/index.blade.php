<x-layout title="Account Holder">
    @foreach ($accountHolders as $accountHolder)
        <p class="m-0">{{ $accountHolder->name }} {{ $accountHolder->linkAccount }}</p>
    @endforeach
</x-layout>
