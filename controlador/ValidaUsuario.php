<?php

include '../librerias.php';


$oUsu=new Usuario($_REQUEST["nombreUsuario"],$_REQUEST["password"]);

if ($oUsu->VerificaLocal()) {
    echo "Todo bien";
} else {
    echo "<b>Todo mal</b>";
}


