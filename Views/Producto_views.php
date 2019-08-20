<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Modelo-vista-controlador</title>
</head>
<body>
    <h1>Productos disponibles</h1>
    <table border="1">
        <tr>
            <td><strong>Nombre</strong></td>
            <td><strong>Descripcion</strong></td>
            <td><strong>Precio</strong></td>
            <td><strong>Stok</strong></td>
            
        </tr>
        <?php

            include_once '../Controllers/Producto_controller.php';
            $controller_producto = new Producto_controller();
            $controller_producto->getProductos();

           // var_dump($controller_producto);
            

            for ($i=0;$i<count($controller_producto->return_producto);$i++) {
                ?>
                
                    <tr>
                        <td><?php echo $controller_producto->return_producto[$i]["nombre"]; ?></td>
                        <td><?php echo $controller_producto->return_producto[$i]["descripcion"]; ?></td>
                        <td><?php echo $controller_producto->return_producto[$i]["precio"]; ?></td>
                        <td><?php echo $controller_producto->return_producto[$i]["stok"]; ?></td>
                    </tr>
                <?php


            }
            
        ?>
    </table>
</body>
</html>