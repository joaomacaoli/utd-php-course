<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> Painel </span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Entidades
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users"
        aria-expanded="true" aria-controls="users">
        <i class="fas fa-fw fa-cog"></i>
        <span>Usuários</span>
    </a>
    <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Funções de Usuário</h6>
            <a class="collapse-item" href="<?=$urlBase;?>/sandbox.php?option=listUsers">Listar</a>
            <a class="collapse-item" href="<?=$urlBase;?>/sandbox.php?option=insertUser">Cadastrar</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#products"
        aria-expanded="true" aria-controls="products">
        <i class="fas fa-fw fa-cog"></i>
        <span>Produtos</span>
    </a>
    <div id="products" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Funções de Produto</h6>
            <a class="collapse-item" href="<?=$urlBase;?>/sandbox.php?option=listProducts">Listar</a>
            <a class="collapse-item" href="<?=$urlBase;?>/sandbox.php?option=insertProduct">Cadastrar</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clientes"
        aria-expanded="true" aria-controls="clientes">
        <i class="fas fa-fw fa-cog"></i>
        <span>Clientes</span>
    </a>
    <div id="clientes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Funções de Clientes</h6>
            <a class="collapse-item" href="buttons.html">Listar</a>
            <a class="collapse-item" href="cards.html">Cadastrar</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#orders"
        aria-expanded="true" aria-controls="orders">
        <i class="fas fa-fw fa-cog"></i>
        <span>Venda</span>
    </a>
    <div id="orders" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Funções de Venda</h6>
            <a class="collapse-item" href="buttons.html">Listar</a>
            <a class="collapse-item" href="cards.html">Vender</a>
            <a class="collapse-item" href="cards.html">Cancelar Venda</a>
        </div>
    </div>
</li>
<!-- Nav Item - Utilities Collapse Menu -->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Extras
</div>


<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->