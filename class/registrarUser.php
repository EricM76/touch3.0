<?php
class RegistrarUser{
//funcion para validar los datos ingresados enviados por $_POST
public function validarDatos($datos,$imagen){
//arrary de errores
    $errores = [];
//validacion de errores
    if ($datos) {
      if (strlen($datos["name"])==0) {
        $errores[] = "Debe ingresar su nombre y apellido";
      }
      if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email tiene un formato incorrecto";
      }
      if (strlen($datos["pass"])<8) {
        $errores[] = "La contraseña tiene menos de 8 caracteres";
      }
      if ($datos["pass"]!=$datos["pass2"]) {
        $errores[] = "Las contraseñas no coinciden";
        $_POST["pass"] = null;
        $_POST["pass2"] = null;
      }
      if ($datos["nick"]==null) {
        $errores[]= "Debes ingresar tu Nick";
      }
      // validación de la imagen subida
      $nombre=$imagen["imagen"]["name"];
      $ext=pathinfo($nombre, PATHINFO_EXTENSION);
      if ($imagen["imagen"]["error"]!=0) {
        $errores[]="Debes subir una foto para tu perfil";
      }
      if ($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
        $errores[]="Los formatos permitidos son jpg, jpeg y png";
      }

    }
    //retorna el array de errores
    return $errores;
  }
//funcion que crea una instancia de la clase usuario para luego guardarla en la base de datos
  public static function crearUser($datos,$imagen){
    //hasheo de contraseña
    $contraHash = password_hash($datos["pass"], PASSWORD_DEFAULT);
    //guarda la imagen de perfil
    $nombre = $imagen["imagen"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $archivoOrigen = $imagen["imagen"]["tmp_name"];
    $rutaDestino = dirname(__DIR__);
    $rutaDestino = $rutaDestino."/images/perfil/";
    $nombreImg = uniqid();
    $rutaDestino = $rutaDestino.$nombreImg.".".$ext;
    move_uploaded_file ($archivoOrigen, $rutaDestino);
    $avatar = $nombreImg.".".$ext;
    //crea una instancia de la clase usuario con los datos recibidos por $_POST. El avatar, perfil y val_user se pasan como un para luego ser cargados de forma independiente
    $usuario = new User($datos["name"], $datos["email"], $contraHash, $datos["nick"], $avatar);
    //retorna la instancia de la clase usuario
    return $usuario;
  }
//funcion para guardar un nuevo usuario
  static public function guardarUser($pdo, $user){
    //genera la consulta sql
      $sql = "INSERT INTO users VALUES(default, :nombre, :email, :pass, :nick, :avatar)";
      //prepara la consulta
      $guardarUser = $pdo->prepare($sql);
      //bindea los datos
      $guardarUser->bindValue(':nombre', $user->getNombre());
      $guardarUser->bindValue(':email', $user->getEmail());
      $guardarUser->bindValue(':pass', $user->getPass());
      $guardarUser->bindValue(':nick', $user->getNick());
      $guardarUser->bindValue(':avatar', $user->getAvatar());

      //ejecuta la consulta
      $guardarUser->execute();
  }

  function cambiarPass($email,$pass,$pdo){
    $error[] = null;
    $usuario = BaseMySQL::buscarPorEmail($email,$pdo,'clientes');

    $passHash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "UPDATE clientes SET pass = '$passHash' WHERE email = '$email'";
    $query = $pdo->prepare($sql);
    $query->execute();

  }

}
 ?>
