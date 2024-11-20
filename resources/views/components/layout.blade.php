<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@isset($pageName) {{ $pageName }} | @endisset {{ __('messages.system_name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css">
    @stack('header')
</head>
<body>

    <div id="menu-lateral">
        <x-side-menu/>
    </div>

    <nav id="menu-topo" class="navbar navbar-expand-lg border-bottom">
        <x-top-menu/>
    </nav>

    <div id="conteudo" class="container-fluid pt-0">
        <div class="row">
            <div class="col-lg-9 pt-5">
                <h1>Área Central</h1>
                <p>Aqui vai o conteúdo principal da página.</p>
                
                {{-- Validation Errors --}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {{ $slot }}
            </div>
            <!-- Sidebar Direita -->
            <div id="sidebar-direita" class="col-lg-3 d-lg-block d-flex flex-column border-start pt-5">
                <x-sidebar-right/>
            </div>
        </div>
    </div>

    @stack('modals')
    @stack('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const toggleBtn = document.getElementById('toggle-btn');
        const menuLateral = document.getElementById('menu-lateral');
        const menuTopo = document.getElementById('menu-topo');
        const conteudo = document.getElementById('conteudo');

        toggleBtn.addEventListener('click', () => {
            menuLateral.classList.toggle('minimizado');
            menuTopo.classList.toggle('menu-minimizado');
            conteudo.classList.toggle('menu-minimizado');
        });
    </script>
</body>

</html>
