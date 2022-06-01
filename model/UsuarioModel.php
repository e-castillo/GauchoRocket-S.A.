<?php

class UsuarioModel{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function getUsuario(){
        return $this->database->query('SELECT * FROM usuario');
    }

    public function registrarUsuario(){
        $nombre = isset( $_POST["nombre"])?$_POST["nombre"] : "";
        $pass = isset( $_POST["pass"])?$_POST["pass"] : "";
        $edad = isset( $_POST["edad"])?$_POST["edad"] : "";
        $email = isset( $_POST["email"])?$_POST["email"] : "";
        $apellido = isset( $_POST["apellido"])?$_POST["apellido"] : "";

        $comprobarMail=$this->database->query("SELECT email from usuario WHERE usuario.email LIKE '$email'");

        while($comprobarMail) {
            if ($comprobarMail["email"] == $email) {
                $_SESSION["error"] = "Este mail de usuario ya se encuentra registrado";
                header("location:view/register.php");
                exit();
            }
        }

        $passMD5= md5($pass);

        $this->database->query($conn,"INSERT INTO usuario (nombre, apellido, edad, email, pass) VALUE ('$nombre','$apellido','$edad','$email','$passMD5');");

        $_SESSION["usuario"]=$nombre;
        echo var_dump($comprobarMail["email"]);
        header("location:view/login.php");
    }
}