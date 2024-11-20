<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Responsiva</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            overflow-x: hidden;
        }
        #menu-lateral {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 200px;
            background-color: #343a40;
            color: white;
            padding: 20px 10px;
            transition: width 0.3s, transform 0.3s;
            overflow: hidden;
        }
        #menu-lateral.minimizado {
            width: 60px;
        }
        #menu-lateral a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 10px 0;
        }
        #menu-lateral a span {
            white-space: nowrap;
            overflow: hidden;
            transition: opacity 0.3s;
        }
        #menu-lateral.minimizado a span {
            opacity: 0;
            visibility: hidden;
        }
        #menu-topo {
            margin-left: 200px; /* Largura do menu lateral */
            background-color: #007bff;
            color: white;
            transition: margin-left 0.3s;
        }
        #menu-topo.menu-minimizado {
            margin-left: 60px;
        }
        #conteudo {
            margin-left: 200px; /* Largura do menu lateral */
            margin-top: 60px; /* Altura do menu topo */
            transition: margin-left 0.3s;
        }
        #conteudo.menu-minimizado {
            margin-left: 60px;
        }
        #sidebar-direita {
            width: 250px;
        }
        @media (max-width: 991.98px) {
            #menu-lateral {
                transform: translateX(-100%);
                width: 200px;
            }
            #menu-lateral.minimizado {
                transform: translateX(0);
            }
            #menu-topo {
                margin-left: 0;
            }
            #conteudo {
                margin-left: 0;
            }
            #sidebar-direita {
                width: 100%;
                margin-top: 20px;
            }
        }
        #toggle-btn {
            cursor: pointer;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <!-- Menu Lateral -->
    <div id="menu-lateral">
        <div id="toggle-btn" class="text-white">
            <i class="bi bi-list"></i>
            <span>Minha Aplicação</span>
        </div>
        <a href="#">
            <i class="bi bi-house"></i>
            <span>Início</span>
        </a>
        <a href="#">
            <i class="bi bi-gear"></i>
            <span>Configurações</span>
        </a>
        <a href="#">
            <i class="bi bi-info-circle"></i>
            <span>Sobre</span>
        </a>
    </div>

    <!-- Menu Topo -->
    <nav id="menu-topo" class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-topo-links" aria-controls="menu-topo-links" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-white" href="#">Minha Aplicação</a>
            <div class="collapse navbar-collapse" id="menu-topo-links">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Coisa 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Coisa 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Área de Conteúdo e Sidebar -->
    <div id="conteudo" class="container-fluid">
        <div class="row">
            <!-- Conteúdo Principal -->
            <div class="col-lg-8">
                <h1>Área Central</h1>
                <p>Aqui vai o conteúdo principal da página.</p>
            </div>
            <!-- Sidebar Direita -->
            <div id="sidebar-direita" class="col-lg-4 d-lg-block d-flex flex-column">
                <h5>Ações Relacionadas</h5>
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-title">Card 1</h6>
                        <p class="card-text">Descrição do card 1.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-title">Card 2</h6>
                        <p class="card-text">Descrição do card 2.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('toggle-btn').addEventListener('click', function () {
            const menuLateral = document.getElementById('menu-lateral');
            menuLateral.classList.toggle('minimizado');
        });
    </script>
</body>
</html>
