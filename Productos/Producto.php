<?php
    include('../config/config.php');
    include('../config/Database.php');

    class Producto{
        public $conn;

        function __construct()
        {
            $db = new Database();
            $this->conn = $db->connectToDatabase();
        }
        
        function save($params){
            $codigoProducto = $params['codigo'];
            $nombreProducto = $params['nombre'];
            $descripcionProducto = $params['descripcion'];
            $seccionProducto = $params['idSeleccion'];;
            $destacadoProducto = $params['idDestacado'];
            $precioProducto = $params['precio'];
            $stockProducto = $params['stock'];
            $fotoProducto = $params['image'];
            $fechaProducto = date('y-m-d');
            $usuarioProducto = 'usuario';
            
            $insert = " INSERT INTO Producto VALUES (NULL,'$codigoProducto','$nombreProducto','$descripcionProducto','$seccionProducto','$destacadoProducto','$precioProducto','$stockProducto','$fotoProducto','$fechaProducto','$usuarioProducto') ";
            return mysqli_query($this->conn, $insert);
        }

        function getAll(){
            $sql = " SELECT * FROM Producto ORDER BY nombre ASC ";
            return mysqli_query($this->conn, $sql);
        }

        function getAllSecciones(){
            $sql = " SELECT * FROM Seccion ORDER BY seccionNombre ASC ";
            return mysqli_query($this->conn, $sql);
        }

        function getProductosSeccion($idSeccion){
            $sql = " SELECT * FROM Producto WHERE seccionId='$idSeccion' ORDER BY nombre ASC ";
            return mysqli_query($this->conn, $sql);
        }

        function getOne($codigoProducto){
            $sql = " SELECT * FROM Producto WHERE codigo = $codigoProducto ";
            return mysqli_query($this->conn, $sql);
        }

        function update($params){
            $codigoProducto = $params['codigo'];
            $nombreProducto = $params['nombre'];
            $descripcionProducto = $params['descripcion'];
            $seccionProducto = $params['idSeleccion'];
            $fotoProducto = $params['image'];
            if($fotoProducto == null){
                $update = " UPDATE Producto SET nombre='$nombreProducto',descripcion='$descripcionProducto',seccionId='$seccionProducto' WHERE codigo = $codigoProducto ";

            }else{
                $update = " UPDATE Producto SET nombre='$nombreProducto',descripcion='$descripcionProducto',seccionId='$seccionProducto',path_foto='$fotoProducto' WHERE codigo = $codigoProducto ";
            }            
            return mysqli_query($this->conn, $update);
        }

        function remove($params){
            $codigoProducto = $params['codigo'];
            $remove = " DELETE FROM producto WHERE codigo = $codigoProducto ";
            return mysqli_query($this->conn, $remove);
        }
    }
?>