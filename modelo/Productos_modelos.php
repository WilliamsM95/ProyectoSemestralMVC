<?php
    require_once 'modelo/Conectar.php';

    class Productos_model
    {
        private $db;
        private $productos;

        public function __construct()
        {
            $this->db = Conectar::conexion();
            $this->productos = array();
        }

        public function get_productos()
        {
            $query = "SELECT * FROM producto ORDER BY cod_producto ASC";
            $res = mysqli_query($this->db,$query);

            while($row = mysqli_fetch_assoc($res))
            {
                $this->productos[] = $row;
            }
            
            return $this->productos;
        }
    }
?>