<?php
class Usuario{
    
    var $nombreUsuario;
    var $nombre;
    var $clave;
    
    function __construct($usu="",$nomUsu="",$clave=""){
        $this->nombreUsuario=$nomUsu;
        $this->nombre=$usu;
        $this->clave=$clave;
    }
    
    function AgregarUsuario(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar()) {
            $db = $oConn->objconn; 
        } else { 
            return false;
        }
        
        if ($this->VerificaUsuario()){
            return false;   
        }  
        else
        {
            $sql="INSERT INTO usuario (nombre,nombreUsuario,password) VALUES ('$this->nombre','$this->nombreUsuario','$this->clave')";
            $db->query($sql);
            return true;
        }
 
    }
    
    function VerificaUsuario(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
        } else {
            return false;
        }

        $sql="SELECT * FROM usuario WHERE nombreUsuario='$this->nombreUsuario'";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows >= 1) {
            return true;
        } else {
            return false;
        }
    }
    
    function VerificaUsuarioClave(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
        } else {
            return false;
        }

        $clavemd5=md5($this->clave);
        $sql="SELECT * FROM usuario WHERE nombreUsuario='$this->nombre' and password='$clavemd5'";
              
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows >= 1) {
            return true;
        } else {
            return false;
        }
    }
    
    function VerificaLocal(){
        $usu="scalderon";
        $key="12345";
        
        if ($this->nombreUsuario == $usu && $this->clave == $key) {
            return true;
        } else {
            return false;
        }
    }
    
}