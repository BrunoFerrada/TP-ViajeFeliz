<?php

class pasajeroConNececidad extends pasajero {
    private $cantNecesidades;
    private $necesidades;

    public function __construct($cantNecesidades, $necesidades, $nombre, $nroAsiento, $nroTicket) {
        $this->cantNecesidades = $cantNecesidades;
        $this->necesidades = $necesidades;
        parent::__construct($nombre, $nroAsiento, $nroTicket);
    }

    public function getCantNecesidades() {
        return $this->cantNecesidades;
    }

    public function setCantNecesidades($cantNecesidades) {
        $this->cantNecesidades = $cantNecesidades;
    }

    public function getNecesidades() {
        return $this->necesidades;
    }

    public function setNecesidades($necesidades) {
        $this->necesidades = $necesidades;
    }

    public function __toString() {
        $resultadoPadre = parent::__toString();
        return "Cantidad de servicios especiales requeridos: " . $this->getCantNecesidades() . "\n" .
               "Servicio especial necesitado: " . $this->getNecesidades() . "\n" . 
               $resultadoPadre;
    }
}