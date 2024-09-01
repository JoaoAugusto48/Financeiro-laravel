<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $body }}
            </div>
            <div class="modal-footer">
                <x-action.button label="Close" is-link="false" type="button" class="secondary" data-bs-dismiss="modal"/>
                @isset ($buttons)
                    {{ $buttons }}
                @endisset
                @empty ($buttons)
                    <button type="button" class="btn btn-primary">Save changes</button>
                @endempty
            </div>
        </div>
    </div>
</div>