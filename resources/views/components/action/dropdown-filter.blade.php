<div class="row justify-content-end">
    <div class="col">
        <div class="d-flex justify-content-end">
            <div class="btn-group me-1">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-filter"></i>
                </button>
                <ul class="dropdown-menu">
                    @foreach ($options as $option)
                    <li>
                        <a class="dropdown-item {{ $currentSort->sort == $option['sort'] ? 'active' : '' }}" href="{{ route('banks.order', ['sort' => $option['sort'], 'type' => $option['type']]) }}">
                            {{ $option['label'] }} 
                            @if ($currentSort->sort === $option['sort'])
                            <i class="bi bi-check2"></i>
                            @endif
                        </a>
                    </li>    
                    @endforeach
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-sort-alpha-{{ $currentSort->type == 'asc' ? 'up' : 'down-alt' }}"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item {{ $currentSort->type == 'asc' ? 'active' : '' }}" href="{{ route('banks.order', ['sort' => $currentSort->sort, 'type' => 'asc']) }}">
                            <i class="bi bi-sort-alpha-up"></i> Asc
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item {{ $currentSort->type == 'desc' ? 'active' : '' }}" href="{{ route('banks.order', ['sort' => $currentSort->sort, 'type' => 'desc']) }}">
                            <i class="bi bi-sort-alpha-down-alt"></i> Desc
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>