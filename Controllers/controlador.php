<?php
    require_once('../Models/modelo.php');

    $menu = new Platillo();
    $pd = $menu->lista_platillos();
    
    require_once("../Views/vista.php");
