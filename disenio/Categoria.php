<html>
    <head>
        <meta charset="UTF-8">
        <title>Categoría</title>
    </head>
    <body>
        <form method="POST" action="../IngresoCategoria.php">
            <div><label>Nombre Categoría</label><input type="text" name="nombreCategoria"></div>
            
            <?php include 'verCategorias.php' ?>
            <input id="enviar" type="button" onclick="" value="Enviar"> 
        </form>
    </body>
</html>