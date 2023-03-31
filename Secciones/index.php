<?php
    include('../config/config.php');
    include('Seccion.php');
    $s = new Seccion();

    $allSecciones = $s->getAll();
    if (isset($_GET['idSeccion']) && !empty($_GET['idSeccion'])) {
        $remove = $s->remove($_GET['idSeccion']);
        if ($remove) {
            header('Location: ' . ROOT . 'Secciones/index.php');
        } else {
            $msj = " <div class='alert alert-danger' rol='alert' > Error al mostar Secciones. </div> ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Permite hacer la página responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlazamos a la hoja de estilos de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Enlazamos a nuestra hoja de estilos personalizada -->
    <link rel="stylesheet" href="../css/productos.css">
    <title>Lista de Secciones e-Commerce</title>
</head>
<body>
    <?php include('../Productos/menuProducto.php'); ?>
     <!-- Creamos un contenedor que llevará las secciones -->
    <div class="container">
        <h2 class="text-center mb-5">Lista de Secciones</h2>

            <div class="row">
                <?php
                while ($s = mysqli_fetch_object($allSecciones)){
                    $input = $s->seccionNombre;
                    echo "<div class='col-3' >";
                    echo " <div class='boder border-info p-2'> ";
                    echo "<h5 class='text-center'>";
                     echo   $s->seccionNombre;
                    echo "</h5>";
                    echo " <div class='text-center' ><a class='btn btn-success ' href='" . "editSeccion.php?idSeccion=$s->idSeccion' > Modificar </a> - <a class='btn btn-danger ' href='" . "deleteSeccion.php?idSeccion=$s->idSeccion' > Eliminar </a> </div>";
                    echo " </div> ";
                    echo "</div>";                   
                }
                ?>
            </div>
            <br>         
    </div>
    <br>
<!-- Footer -->
<?php include('../Productos/footer.php'); ?>

    <!-- Se enlaza con javascript de bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>