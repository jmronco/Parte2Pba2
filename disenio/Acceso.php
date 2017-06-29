<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio Sesión</title>
    </head>
    <body>
        <form method="POST" action="../IniciarSesion.php">
            <div><label>Nombre</label><input type="text" name="nombre"></div>
            <div><label>Usuario</label><input type="text" name="nombreUsuario"></div>
            <div><label>Clave</label><input type="password" name="password"></div>
            <input id="enviar" type="button" onclick="" value="Enviar"> 
        </form>
    </body>
    <script>
    $(document).ready(function(){
            $("#enviar").click(function(){
        
                if ($("#nombreUsuario").val()!=="" && $("#password").val()!=="" && $("#nombre").val()!==""){
                    ///*$("#frmusuario").submit();
                        $.ajax({url:"controlador/ValidaUsuario.php"
                            ,type:'post'
                            ,data:{'nombreUsuario':$("#nombreUsuario").val(),
                                'password':$("#password").val(),
                                'nombre':$("#nombre").val()
                                }
                            ,success:function(resultado){
                                $("#mensaje").html(resultado);
                            }
                        });
                    }
                else
                    alert("Debe Agregar el usuario y clave");
            });
     });
     </script>
    
    
</html>