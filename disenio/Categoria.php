<html>
    <head>
        <meta charset="UTF-8">
        <title>Categoría</title>
    </head>
    <body>
        <form method="POST" action="../IngresoCategoria.php">
            <div><label>Nombre Categoría</label><input type="text" name="nombreCategoria"></div>
            
            <?php include 'verCategorias.php' ?>
            <input type="submit" value="Agregar Categoría">
        </form>
    </body>
</html>