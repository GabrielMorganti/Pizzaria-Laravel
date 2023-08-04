<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pedido.index')}}">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                        Pedidos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">
                        <i class="bi bi-people-fill"></i>
                        Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cargo.index')}}">
                        <i class="bi bi-briefcase-fill"></i>
                        Cargos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cliente.index')}}">
                        <i class="fa-solid fa-user-tie"></i>
                        Clientes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produto.index') }}">
                        <i class="fa-solid fa-pizza-slice"></i>
                        Produtos
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
