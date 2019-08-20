<?php
include_once 'conexion.php';

class Platillo
{
    private $platillo;
    private $dbh;
    private $conexion;

    public function __construct()
    {
        $this->platillo = array();
        $this->conexion = new Conexion(); 
        //$this->dbh = new PDO('mysql:host=localhost;dbname=mvc', "root", "");
    }
    private function set_names()
    {
        return $this->conexion->query("SET NAMES 'utf8'");
    }

    public function lista_platillos()
    {
        self::set_names();
        $sql="SELECT nombre, descripcion,precio,stok FROM producto where estado = 1";
        foreach ($this->conexion->query($sql) as $res) {
            $this->platillo[]=$res;
        }
        return $this->platillo;
        $this->conexion=null;
    }
}
