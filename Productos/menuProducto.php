<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Permite hacer la página responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlazamos a la hoja de estilos de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Enlazamos a nuestra hoja de estilos personalizada -->
    <link rel="stylesheet" href="../css/productos.css">
</head>
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
          <a class="nav-link" aria-current="page" href="../Registro/Registro.php">Registro</a>
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
          <a class="nav-link" aria-current="page" href="../Pagos/Pagos.php">Pagos</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
