<?php
include('../config/config.php');
include('Producto.php');

    $s = new Producto();
    $data = mysqli_fetch_object($s->getOne($_GET['codigo']));

    if (isset($_POST) && !empty($_POST)){
        $remove = $s->remove($_POST);
        if ($remove){
            $error = '<div class="alert alert-success" role="alert">Producto eliminado correctamente</div>';
        } else{
            $error = '<div class="alert alert-danger" role="alert"><Error al eliminar el Producto</div>';
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
    <title>Elimina Productos e-Commerce</title>
</head>
<body>
    <?php include('../Productos/menuProducto.php'); ?>
     <!-- Creamos un contenedor que llevará los Productos -->
    <div class="container">
        <?php  
            if (isset($error)){
                echo $error;
            }
        ?>
        <h2 class="text-center mb-5">Elimina Productos</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre del Producto" require class="form-control" value=<?= $data->nombre ?>>
                    <input type="hidden" name="codigo" id="codigo" value=<?= $data->codigo ?> />
                </div>
                <div class="col-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <button class="btn btn-success">Eliminar</button>
                </div>
                <div class="col-4"></div>
            </div>
            
        </form>
    </div>
    <br>
<!-- Footer -->
<?php include('../Productos/footer.php'); ?>

    <!-- Se enlaza con javascript de bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>