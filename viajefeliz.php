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

       /*public function modificarPasajeros($numeroDocumento, $pasajeros) {
        foreach ($this->pasajerosViaje as $key => $value) {
            if ($value['numero de documento'] == $numeroDocumento) {
                $this->pasajerosViaje[$key]['nombre'] = $pasajeros['nombre'];
                $this->pasajerosViaje[$key]['apellido'] = $pasajeros['apellido'];
                break;       
            }
        }
       }*/

       public function quitarPasajeros($numeroDocumento) {
        foreach ($this->pasajerosViaje as $key => $value) {
            if ($value['numero de documento'] == $numeroDocumento) {
                unset($this->pasajerosViaje[$key]);
                break;
            }
        }
       }

       public function modificarPasajerox($indice, $nombre, $apellido, $numeroDocumento) {
        if($indice >= 0 && $indice < count($this->pasajerosViaje)) {
          $pasajero = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'numDoc' => $numeroDocumento
          ];
          $this->pasajerosViaje[$indice] = $pasajero;
          return true;
        } else {
          return false;
        }
      }

      public function mostrarDatos() {
        echo "Código: " . $this->codigo . "\n";
        echo "Destino: " . $this->destino . "\n";
        echo "Cantidad máxima de pasajeros: " . $this->cantMaxPasajeros . "\n";
        echo "Pasajeros: <\n>";
        $pasajeros = $this->pasajerosViaje;
        if(empty($pasajeros)) {
            echo "No hay pasajeros en el viaje<\n>";
          } else {
            echo "\nPasajeros:\n";
            foreach($pasajeros as $index => $pasajero) {
              echo "Pasajero " . ($index + 1) . ":<\n>";
              echo "Nombre: " . $pasajero['nombre'] . "<\n>";
              echo "Apellido: " . $pasajero['apellido'] . "<\n>";
              echo "Número de documento: " . $pasajero['numeroDocumento'] . "<\n><\n>";
            }
          }
      }
    }