<?php
    include('../config/config.php');
    include('../config/Database.php');

    class Seccion{
        public $conn;

        function __construct()
        {
            $db = new Database();
            $this->conn = $db->connectToDatabase();
        }
        
        function save($params){
            $seccionNombre = $params['seccionNombre'];
            $insert = " INSERT INTO Seccion VALUES (NULL,'$seccionNombre') ";
            return mysqli_query($this->conn, $insert);
        }

        function getAll(){
            $sql = " SELECT * FROM Seccion ORDER BY seccionNombre ASC ";
            return mysqli_query($this->conn, $sql);
        }

        function getOne($id){
            $sql = " SELECT * FROM Seccion WHERE idSeccion = $id ";
            return mysqli_query($this->conn, $sql);
        }

        function update($params){
            $idSeccion = $params['idSeccion'];
            $seccionNombre = $params['seccionNombre'];
            $update = " UPDATE Seccion SET seccionNombre='$seccionNombre' WHERE idSeccion='$idSeccion' ";
            return mysqli_query($this->conn, $update);
        }

        function remove($params){
            $idSeccion = $params['idSeccion'];
            $remove = " DELETE FROM Seccion WHERE idSeccion = $idSeccion ";
            return mysqli_query($this->conn, $remove);
        }



    }
?>