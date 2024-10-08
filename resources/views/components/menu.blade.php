<nav class="navbar navbar-dark bg-dark sticky-top border-bottom">
    <div class="container-fluid d-flex align-items-center">
        
        <div class="d-flex align-items-center">
            <button class="navbar-toggler fs-6" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand ms-3" href="{{ route('home') }}">Finanças</a>
        </div>
        <div class="d-flex align-items-center">
            user
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>

        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Financeiro</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                            <i class="bi bi-house"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        {{-- <a class="nav-link" href="{{ route('accounts.index') }}">Accounts</a> --}}
                        <x-menus.dropdowns.dropdown-title :url="route('accounts.index')">
                            <i class="bi bi-currency-dollar"></i>
                            Accounts
                        </x-menus.dropdowns.dropdown-title>
                    </li>
                    <li class="nav-item dropdown">
                        <x-menus.dropdowns.dropdown-title :url="route('holders.index')">
                            <i class="bi bi-person-lines-fill"></i>
                            Account Holders
                        </x-menus.dropdowns.dropdown-title>
                    </li>
                    <li class="nav-item dropdown">
                        <x-menus.dropdowns.dropdown-title :url="route('allowances.index')">
                            <i class="bi bi-calendar-event"></i>
                            Allowances
                        </x-menus.dropdowns.dropdown-title>
                    </li>
                    <li class="nav-item dropdown">
                        <x-menus.dropdowns.dropdown-title :url="route('banks.index')">
                            <i class="bi bi-bank2"></i>
                            Banks
                        </x-menus.dropdowns.dropdown-title>
                    </li>
                    <li class="nav-item dropdown">
                        <x-menus.dropdowns.dropdown-title :url="route('transactions.index')">
                            <i class="bi bi-cash-coin"></i>
                            Transactions
                        </x-menus.dropdowns.dropdown-title>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                </ul>
                {{-- <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form> --}}
            </div>
        </div>
    </div>
</nav>