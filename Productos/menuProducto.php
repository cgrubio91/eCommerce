<!-- Barra de Navegación con logotipo incluido -->
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <!-- El logotipo va en la sección navbar-brand y redirige a la página principal tiene estilos css ajustados-->
    <a class="navbar-brand" href="../index.php"><img src="../imagenesProductos/logo.png" alt="Logo E-commerce" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../Registro.html">Registro</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Secciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Secciones/index.php">Lista de Secciones</a></li>
            <li><a class="dropdown-item" href="../Secciones/addSeccion.php">Adiciona Sección</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Productos/index.php">Lista de Productos</a></li>
            <li><a class="dropdown-item" href="../Productos/addProducto.php">Adiciona Producto</a></li>
            <li><a class="dropdown-item" href="../Productos/selProducto.php">Edición de Productos</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../Carro.html">Carro de Compras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../pagos.html">Pagos</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Busca</button>
      </form>
    </div>
  </div>
</nav>