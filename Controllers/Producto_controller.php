<?php

    include_once '../Models/Producto.php';

    class Producto_controller{
        
        public $Producto;
        public $return_producto; // variable que paso para las vistas


        public function __construct()
        {
            $this->Producto = new Producto();   
            
        }

        public function getProductos(){
            $this->return_producto = $this->Producto->getProductos();

            if (isset($this->return_producto)) {
                # code...
                //require_once '../Views/Producto_views.php';
                //var_dump($this->return_producto);
            }
        }
    }

?>