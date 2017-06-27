<?php

class Categoria {
    var $nombreCategoria;
        
    function __construct($nom=""){
        $this->nombreCategoria=$nom;
  
    }
           
    function AgregarCategoria(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar()) {
            $db = $oConn->objconn; 
        } else {return false;}
        
        if ($this->VerificaCategoria()){
            return false;   
        }  
  
        $sql="INSERT INTO categoria (nombreCategoria) VALUES ('$this->nombre')";
        $db->query($sql);
        return true;
       
    }
    
    function EliminarCategoria(Producto $producto){
        $oConn=new Conexion();
        
        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
        } else {
            return false;
        }
        
        if($this->VerificaProducto())
        {    
            $sql="DELETE FROM categoria WHERE nombreCategoria='$producto->nombre'";
            $db->query($sql);
            return true;
        }
        
        return false;
        
                           
    }
    
    function VerificaCategoria(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
        } else {
            return false;
        }

        $sql="SELECT * FROM categoria WHERE nombreCategoria='$this->nombre'";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows >= 1) {
            return true;
        } 
        return false;
    }
}
