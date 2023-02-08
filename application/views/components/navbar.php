<nav id="accordion">
    <div class="card">
        <div class="card-header text-center">
            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                <h3>Categorias</h3>
            </a>
        </div>
        <div id="collapseOne" class="collapse" data-parent="#accordion">
            <div class="card-body col-md-12">
                <div class="navbar navbar-expand-sm justify-content-center">
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url()?>pagina/index">Inicio</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Tematicas
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?=base_url()?>pagina/tematica/cultura">Cultura</a>
                            <a class="dropdown-item" href="<?=base_url()?>pagina/tematica/deportes">Deportes</a>
                            <a class="dropdown-item" href="<?=base_url()?>pagina/tematica/tecnologia">Tecnologia</a>
                            <a class="dropdown-item" href="<?=base_url()?>pagina/tematica/salud">Salud</a>
                            <a class="dropdown-item" href="<?=base_url()?>pagina/tematica/ciencia">Ciencia</a>
                        </div>
                        </li>
                        <!-- /Dropdown -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url()?>pagina/menu/tiempo">Tiempo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url()?>pagina/menu/ubicacion">Google Maps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url()?>pagina/menu/dolar">Cotización del Dolar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url()?>pagina/menu/audiovisual">AudioVisual</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url()?>pagina/menu/contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>