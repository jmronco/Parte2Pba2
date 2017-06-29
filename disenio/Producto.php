<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Producto</title>
        
    </head>
    <body>
        <form method="POST" action="../AgregarProducto.php">
            <div><label>Nombre Producto      :</label><input id="nombre" type="text" name="nombre"></div>
            <div><label>Categoría de Producto:</label><input id="categoriaPdcto" type="text" name="categoriaPdcto"></div>
            <div><label>Cantidad de Producto :</label><input id="cantPdcto" type="number" name="cantPdcto"></div>
            <div><label>Precio de Producto   :</label><input id="precioPdcto" type="number" name="precioPdcto"></div>
            <div><label>Proveedor            :</label><input id="proveedor" type="text" name="idProveedor"></div>
            <input id="enviar" type="button" onclick="" value="Enviar"> 
        </form>
        
        <?php include 'verProductos.php' ?>
        
    </body>
    <script>
    $(document).ready(function(){
            $("#enviar").click(function(){
        
                if ($("#nombre").val()!=="" && $("#categoriaPdcto").val()!=="" && $("#cantPdcto").val()!=="" && $("#precioPdcto").val()!=="" && $("#proveedor").val()!==""){
                        $.ajax({url:"controlador/ValidaProducto.php"
                            ,type:'post'
                            ,data:{'nombre':$("#nombre").val()
                                }
                            ,success:function(resultado){
                                $("#mensaje").html(resultado);
                            }
                        });
                    }
                else
                    alert("Debe Agregar nombre del producto");
            });
     });
     </script>
</html>
<?php
/*Falta agregar nombre de imagen, ubicación imagen
<div><img src="http://mkt.ssstatic.com/home/img/tematicas/tematica-recambios-vehiculos-1.jpg" alt="solostocks.com" ></img></div>*/
