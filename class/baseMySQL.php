<?php

class BaseMySQL extends BaseDatos{

    static public function conexion($host,$db,$usuario,$password,$puerto,$charset){
        try {
            $dsn = "mysql:host=".$host.";"."dbname=".$db.";"."port=".$puerto.";"."charset=".$charset;
            $baseDatos = new PDO($dsn,$usuario,$password);
            $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $baseDatos;
        } catch (PDOException $errores) {
            echo "No me pude conectar a la BD ". $errores->getmessage();
            header('location:mantenimiento.php');
            exit;
        }
    }

      static public function buscarPorEmail($email,$pdo,$tabla){
        $sql = "SELECT * FROM $tabla WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    }



  public function leer(){
      //A futuro trabajaremos en esto
  }
  public function actualizar(){
      //A futuro trabajaremos en esto
  }
  public function borrar(){
      //A futuro trabajaremos en esto
  }
  public function guardar($usuario){
      //Este fue el método usao para json
  }

}


 ?>
