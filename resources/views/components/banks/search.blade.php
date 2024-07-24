<form :action="$route" method="post" class="d-flex mt-3" role="search">
    @csrf
    <input class="form-control me-2" 
            name="search" 
            type="text" 
            placeholder="Search" 
            aria-label="Search"
            @isset($search)
                value="{{ $search }}"
            @endisset>
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>