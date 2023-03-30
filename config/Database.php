<?php
/* Conexión a la base de datos */

class Database
{
    public $host = '127.0.0.1';
    public $user = 'root';
    public $pass = 'admin';
    public $db = 'ecommerce';
    private $conn;

    /* Método constructor controlará la conexión a la base de datos */

    function __construct()
    {
        $this->conn = $this->connectToDatabase();
        return $this->conn;
    }

    /* Función que nos permite hacer la conexion a la base de datos */
    function connectToDatabase()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db );
        if (mysqli_connect_error()) {
            echo "Error de conexión " . mysqli_connect_error();
        }
        return $conn;
    }
}
?>