<?php

class RegisterController {
    private $printer;

    public function __construct($printer) {
        $this->printer = $printer;
    }

    public function execute() {
        $this->printer->generateView('RegisterView.html');
    }

    public function registrarUsuario(){

    }
}