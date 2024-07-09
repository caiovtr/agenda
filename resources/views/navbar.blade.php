<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href='#'>Agenda de Contatos</a>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('inicio')}}">
                        Página inicial <span class="sr-only">(atual)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('indexContatos')}}" class="nav-link">
                            <span data-feather="file"></span>
                            Exibir Contatos Cadastrados
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('novoContato')}}" class="nav-link">
                            <span data-feather="shopping-cart"></span>
                            Cadastro de Contatos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('pesquisarContato')}}" class="nav-link">
                            <span data-feather="users"></span>
                            Pesquisar Contato
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>