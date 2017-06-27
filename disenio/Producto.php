<html>
    <head>
        <meta charset="UTF-8">
        <title>Producto</title>
    </head>
    <body>
        <form method="POST" action="../AgregarProducto.php">
            <div><label>Nombre Producto</label><input type="text" name="nombrePdcto"></div>
            <div><label>Código Producto</label><input type="number" name="idPdcto"></div>
            <div><label>Categoría de Producto</label><input type="text" name="categoriaPdcto"></div>
            <div><label>Cantidad de Producto</label><input type="number" name="cantPdcto"></div>
            <div><label>Precio de Producto</label><input type="number" name="precioPdcto"></div>
            <div><label>Proveedor</label><input type="text" name="idProveedor"></div>
            <input type="submit" value="Agregar Producto">
        </form>
    </body>
</html>

/*Falta agregar nombre de imagen, ubicación imagen*/

<div><img src="http://mkt.ssstatic.com/home/img/tematicas/tematica-recambios-vehiculos-1.jpg" alt="solostocks.com" ></img></div>