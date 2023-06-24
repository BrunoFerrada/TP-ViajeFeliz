<?php

class Pasajero {
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $telefono;
    private $numAsiento;
    private $numTicket;

    public function __construct($nombre, $apellido, $nroDocumento, $telefono, $numAsiento, $numTicket) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nroDocumento = $nroDocumento;
        $this->telefono = $telefono;
        $this->numAsiento = $numAsiento;
        $this->numTicket = $numTicket;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getNroDocumento() {
        return $this->nroDocumento;
    }

    public function setNroDocumento($nroDocumento) {
        $this->nroDocumento = $nroDocumento;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    
    public function getNumAsiento() {
        return $this->numAsiento;
    }

    public function setNumAsiento($numAsiento) {
        $this->numAsiento = $numAsiento;
    }

    public function getNumTicket() {
        return $this->numTicket;
    }

    public function setNumTicket($numTicket) {
        $this->numTicket = $numTicket;
    }

    /*public function __toString() {
        echo "Nombre: " . $this->nombre . "\n" . "Apellido: " . $this->apellido . "\n" . "Número de documento: " . $this->nroDocumento . "\n" . "Telefono: " . $this->telefono . "\n\n";
    }*/
}