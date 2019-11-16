<?php
class User{
  // atributos que corresponde a cada una de las columnas de la tabla 'clientes'

  private $nombre;
  private $email;
  private $pass;
  private $nick;
  private $avatar;

  // funcion constructora

  public function __construct($nombre, $email, $pass, $nick, $avatar){
    $this->nombre = $nombre;
    $this->email = $email;
    $this->pass = $pass;
    $this->nick = $nick;
    $this->avatar = $avatar;
  }
  // seters y geters

  public function getNombre()
   {
       return $this->nombre;
   }

   public function setNombre($nombre)
   {
       $this->nombre = $nombre;

       return $this;
   }

   public function getApellido()
   {
       return $this->apellido;
   }

   public function setApellido($apellido)
   {
       $this->apellido = $apellido;

       return $this;
   }

   public function getEmail()
   {
       return $this->email;
   }

   public function setEmail($email)
   {
       $this->email = $email;

       return $this;
   }

   public function getPass()
   {
       return $this->pass;
   }

   public function setPass($pass)
   {
       $this->pass = $pass;

       return $this;
   }

   public function getNick()
   {
       return $this->nick;
   }

   public function setNick($nick)
   {
       $this->nick = $nick;

       return $this;
   }

   public function getAvatar()
   {
       return $this->avatar;
   }

   public function setAvatar($avatar)
   {
       $this->avatar = $avatar;

       return $this;
   }

}

 ?>
