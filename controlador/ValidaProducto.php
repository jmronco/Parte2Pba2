<?php

include '../librerias.php';


$oPro=new Producto($_REQUEST["nombre"],$_REQUEST["nomImg"],$_REQUEST["ubiImg"]);


//Verifica que el usuario agregado no este en la base de datos

if ($oUsu->AgregarUsuario()) {
    echo "Usuario Agregado";
} else {
    echo "<b>Usuario ya existente</b>";
}