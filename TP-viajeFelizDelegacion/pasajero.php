<?php

class pasajero{
    private $nombre;
    private $nroAsiento;
    private $nroTicket;

    public function __construct($nombre, $nroAsiento, $nroTicket) {
        $this->nombre = $nombre;
        $this->nroAsiento = $nroAsiento;
        $this->nroTicket = $nroTicket;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNroAsiento() {
        return $this->getNroAsiento();
    }

    public function setNroAsiento($nroAsiento) {
        $this->nroAsiento = $nroAsiento;
    }

    public function getNroTicket() {
        return $this->nroTicket;
    }

    public function setNroTicket($nroTicket) {
        $this->nroTicket = $nroTicket;
    }

    public function __toString() {
        return "Nombre: " . $this->getNombre() . "\n" . 
               "Número de asiento: " . $this->getNroAsiento() . "\n" . 
               "Número de ticket: " . $this->getNroTicket();
    }
}