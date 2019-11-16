<?php
session_start();

require_once("class/baseDeDatos.php");
require_once("class/baseMySQL.php");
// require_once("class/producto.php");
require_once("class/user.php");
// require_once("class/categoria.php");
// require_once("class/registrarProductos.php");
require_once("class/registrarUser.php");
// require_once("class/admin.php");
// require_once("class/registrarAdmin.php");
require_once("class/validacion.php");
require_once("class/autenticacion.php");
require_once("class/cookies.php");

$host = "localhost";
$bd = "touch";
$usuario = "root";
$password = "";
$puerto = "3306";
$charset = "utf8mb4";

$pdo = BaseMySQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);


$validadorUsuario = new RegistrarUser();

function persistir($input){
  if(isset($_POST[$input])){
    return $_POST[$input];
  }
}
function valid($input){
  $valid = "is-valid";
  $invalid = "is-invalid";
  if (persistir($input)) {
    return $valid;
  }
}
function varDump($variable){
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
  exit;
}
 ?>
