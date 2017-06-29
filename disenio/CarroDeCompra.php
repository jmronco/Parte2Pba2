<?php
    include "../constantes.php";
    include PATH.'/lib/Conexion.php';
    include PATH.'/lib/Usuario.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Carro De Compra</title>
    </head>
    <body>
        <form method="POST" action="../IngresoPedidos.php">
            <div><label>Número Pedido</label><input type="number" name="numPedido"></div>
            <div><label>Cantidad Productos</label><input type="number" name="cantidadProductos"></div>
            <div><label>Total Pedido</label><input type="number" name="totalPedido"></div>
            <input type="submit" value="Ingresar Datos">
        </form>
    </body>
</html>