<?php

class pasajeroVip extends pasajero {
    private $nroViajeroFrec;
    private $cantMillas;

    public function __construct($nroViajeroFrec, $cantMillas, $nombre, $nroAsiento, $nroTicket) {
        $this->nroViajeroFrec = $nroViajeroFrec;
        $this->cantMillas = $cantMillas;
        
        parent::__construct($nombre, $nroAsiento, $nroTicket);
    }

    public function getNroViajeroFrec() {
        return $this->nroViajeroFrec;
    }

    public function setNroViajeroFrec($nroViajeroFrec) {
        $this->nroViajeroFrec = $nroViajeroFrec;
    }

    public function getCantMillas() {
        return $this->cantMillas;
    }

    public function setCantMillas($cantMillas) {
        $this->cantMillas = $cantMillas;
    }

    public function __toString() {
        $resultadoPadre = parent::__toString();
        return "Número de viajero frecuente: " . $this->getNroViajeroFrec() . "\n" .
               "cantidad de millas: " . $this->getCantMillas() . "\n" . 
               $resultadoPadre;
    }
}