<header>
    <nav class="navbar d-flex justify-content-between col-12">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>pagina/menu/tiempo"><i class="fa-solid fa-cloud fa-xl"></i> <span>San Luis - Nublado - 19°C</span></a>
            </li>
        </ul>

        <a class="navbar-brand" href="https://sanluisinforma.com.ar" target="_blank"><?=nombre_empresa?></a><!-- Brand -->

        <div class="dropdown dropleft float-right">
            <button type="button" class="btn" data-toggle="dropdown">
                <i class="fa-solid fa-bars fa-xl"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item disabled" href="#"> <i class="fa-regular fa-id-badge fa-lg"></i> Cuenta</a>
                <a class="dropdown-item" href="<?=base_url()?>pagina/menu/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Iniciar Sesion</a>
            </div>
        </div>
    </nav>
</header>