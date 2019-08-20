<?php

include_once 'conexion.php';

    class Producto{
        
        private $conexion;
        private $productos;

        public function __construct()
        {
            $this->productos = array();
            $this->conexion = new Conexion();    
        }

        private function set_names()
        {
            return $this->conexion->query("SET NAMES 'utf8'");
        }

        public function getProductos()
        {
            self::set_names();
            $consulta = 'SELECT * FROM producto where estado=1';
            foreach ($this->conexion->query($consulta) as $resultado) {
                # code...
                $this->productos[] = $resultado;
            }

            return $this->productos;
            $this->conexion = null;
        }

        

    }
?>