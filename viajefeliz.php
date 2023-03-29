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
        
        public function obtenerCantMaxPasajeros() {
            return $this->cantMaxPasajeros;
        }

        public function ponerCantMaxPasajeros($cantMaxPasajeros) {
            $this->cantMaxPasajeros = $cantMaxPasajeros;
        }

        public function obtenerPasajerosViaje() {
            return $this->pasajerosViaje;
        }

        public function ponerPasajerosViaje($pasajerosViaje) {
            $this->pasajerosViaje = $pasajerosViaje;
        }

       public function agregarPasajeros($pasajeros) {
            array_push($this->pasajerosViaje, $pasajeros);
       }

       public function modificarPasajeros($numeroDocumento, $pasajeros) {
        foreach ($this->pasajerosViaje as $key => $value) {
            if ($value['numero de documento'] == $numeroDocumento) {
                $this->pasajerosViaje[$key]['nombre'] = $pasajeros['nombre'];
                $this->pasajerosViaje[$key]['apellido'] = $pasajeros['apellido'];
                break;       
            }
        }
       }

       public function quitarPasajeros($numeroDocumento) {
        foreach ($this->pasajerosViaje as $key => $value) {
            if ($value['numero de documento'] == $numeroDocumento) {
                unset($this->pasajerosViaje[$key]);
                break;
            }
        }
       }
    }