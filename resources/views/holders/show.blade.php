<x-layout title="{{ $accountHolder->name }}">

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
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Transações</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mensalidades</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul>

</x-layout>
