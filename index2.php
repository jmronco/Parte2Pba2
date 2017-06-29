<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Solo Stocks</title>
    </head>
    <body>
        <link href="disenio/css/estilos.css" rel="stylesheet" type="text/css"/>
        
        
</head>
<body>
	<header>
		<div class="wrapp">
			<div class="logo">
                            <a href="#"><img src="disenio/img/logo-header.svg" img width="200px" alt="solostocks.com"></a>
                            <center><h4><?php 
                            echo "Página Principal"; 
                            ?></h4></center>
                            
			</div>
				<ul>
                                    <input align="center" type="text" id="myInput"  onkeyup="myFunction()" placeholder="Buscar.."><br></br>
                                    <div><a href="index.php">Inicio</a></div><br>
                                    <div><input type="submit" value="Acceso a Cuenta" 
                                                onclick="location='disenio/acceso.php'"</input></div><br>
                                                <div><input type="submit" value="Crear Cuenta" 
                                                onclick="location='disenio/crearUsuario.php'"</input></div><br>
                                                <div><a href="disenio/carroDeCompra.php">Carro de Compra</a></div>
                                            <select>
                                                <optgroup label="Categorías">
                                                    <option value="categoria1">Categoría 1</option>
                                                    <option value="categoria2">Categoría 2</option>
                                                    <option value="categoria3">Categoría 3</option>
                                                    <option value="categoria4">Categoría 4</option>
                                                    <option value="categoria5">Categoría 5</option>
                                                <optgroup>
                                            </select>
                                                <div><a href="disenio/categoria.php">Categoría</a></div>
                                                <div><a href="disenio/producto.php">Producto</a></div><br>
                                    <div></div><button align="left" class="btnOf">Ofertas</button>
                                    <button class="btnLiq">Liquidaciones</button>
                                    
                                </ul>
		</div>
            <div></div><button><a  href="disenio/verProductos.php">Ver Productos</a></button>
            <button class="btnVCat">Ver Categorías</button>
	</header>
                            
    </body>
    <footer></footer>
</html>
