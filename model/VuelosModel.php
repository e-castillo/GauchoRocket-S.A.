<?php

class VuelosModel {
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function getVuelos(){
        return $this->database->query('SELECT * FROM vuelos');
    }

    public function buscarVuelos($nombre){
        return $this->database->query("SELECT * FROM vuelos WHERE NombreEquipo = '$nombre'");
    }
}