<?php
    include('../config/config.php');
    include('../config/Database.php');
    //include('../Productos/menuProducto.php');
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Permite hacer la página responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlazamos a la hoja de estilos de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Enlazamos a nuestra hoja de estilos personalizada -->
    <link rel="stylesheet" href="../css/Pagos_estilos.css">
    <title>Pagos e-Commerce</title>
</head>

<body>
    <?php include('../Productos/menuProducto.php'); ?>
    <!-- Barra de Navegación con logotipo incluido -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre en la tarjeta</label>
                                <input type="text" class="form-control" id="nombre" required />
                            </div>
                            <div class="form-group">
                                <label for="numero">Número de tarjeta</label>
                                <input type="text" class="form-control" id="numero" required />
                            </div>
                            <div class="form-group">
                                <label for="vencimiento">Fecha de vencimiento</label>
                                <input type="month" name="fecha" id="fecha vencimiento" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV</label>
                                <input type="number" class="form-control" id="cvv" required />
                            </div>
                            <div class="form-group">
                                <label for="tipo">Tipo de tarjeta</label>
                                <select class="form-control" id="tipo" required>
                                    <option value="" disabled selected>
                                        Seleccione el tipo de tarjeta
                                    </option>
                                    <option value="visa">Visa</option>
                                    <option value="mastercard">Mastercard</option>
                                    <option value="american">Nequi</option>
                                    <option value="american">Daviplata</option>
                                    <option value="american">PayPal</option>
                                </select>
                            </div>
                            <div class="form-group text-sm-center">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">Siguenos en nuestras redes sociales</p>
                <div style="text-align:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                    <p class="text-center">Conoce tu tarjeta</p>
                    <div class="video-container">
                        <iframe width="300" height="200" src="https://www.youtube.com/watch?v=ScGtTP8Qgu8" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
