<?php

class HomeController {
    private $printer;
    private $VuelosModel;

    public function __construct($VuelosModel, $printer) {
        $this->VuelosModel = $VuelosModel;
        $this->printer = $printer;
    }

    public function execute() {
        $vuelos  = $this->VuelosModel->getVuelos();
        $data = ["vuelos" => $vuelos];
        $this->printer->generateView('homeView.html', $data);
    }

    public function buscarVuelos() {
        $nombre = isset( $_POST["nombre"])?$_POST["nombre"] : "";
        $vuelosBuscados  = $this->VuelosModel->buscarVuelos($nombre);
        $data = ["vuelosBuscados" => $vuelosBuscados];
        $this->printer->generateView('homeView.html', $data);
    }
}