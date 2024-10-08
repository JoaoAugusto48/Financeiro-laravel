<x-layout page-name="Holder">
    <x-slot:title>
        Atualizar: {{ $accountHolder->name }}
    </x-slot:title>
    
    <form action="{{ route('holders.update', $accountHolder) }}" method="post">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col">
                <div class="hstack gap-2">
                    <x-action.button.back/>
                    <div class="vr"></div>
                    <x-action.button.save/>
                </div>
            </div>
        </div>

        <x-holders.form 
            :action="route('holders.update', $accountHolder->id)"
            :$accountHolder
            :go-back="route('holders.show', $accountHolder)"/>
    </form>
</x-layout>