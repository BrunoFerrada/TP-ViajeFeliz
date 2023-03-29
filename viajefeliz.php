<?php
    class Viaje {
        private $codigo;
        private $destino;
        private $cantMaxPasajeros;
        private $pasajerosViaje;

        public function __construct($codigo, $destino, $cantMaxPasajeros) {
            $this->codigo = $codigo;
            $this->destino = $destino;
            $this->cantMaxPasajeros = $cantMaxPasajeros;
            $this->pasajerosViaje = array();
        }

        public function obtenerCodigo() {
            return $this->codigo;
        }

        public function ponerCodigo($codigo) {
            $this->codigo = $codigo;
        }

        public function obtenerDestino() {
            return $this->destino;
        }

        public function ponerDestino($destino) {
            $this->destino = $destino;
          }


    }