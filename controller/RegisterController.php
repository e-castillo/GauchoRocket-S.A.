<?php

class RegisterController {
    private $printer;
    private $usuarioModel;

    public function __construct($printer) {
        $this->printer = $printer;
    }

    public function execute() {
        $this->printer->generateView('RegisterView.html');
    }

    public function registrarUsuario(){
        $nombre = isset( $_POST["nombre"])?$_POST["nombre"] : "";
        $pass = isset( $_POST["pass"])?$_POST["pass"] : "";
        $edad = isset( $_POST["edad"])?$_POST["edad"] : "";
        $email = isset( $_POST["email"])?$_POST["email"] : "";
        $apellido = isset( $_POST["apellido"])?$_POST["apellido"] : "";

        $this->usuarioModel->registrarUsuario($nombre,$pass,$edad,$email,$apellido);
        if($_SESSION["error"]){
            $this->printer->generateView('RegisterView.html');
        }
        $this->printer->generateView('LoginView.html');
    }
}