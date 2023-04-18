<?php
include_once 'pasajeros.php';
include_once 'responsableV.php';

    class Viaje {
        private $codigo;
        private $destino;
        private $cantMaxPasajeros;
        private $cantPasajeros;
        private $pasajerosViaje;
        private $pasajero;

        public function __construct($codigo, $destino, $cantMaxPasajeros, $cantPasajeros, $pasajero) {
            $this->codigo = $codigo;
            $this->destino = $destino;
            $this->cantMaxPasajeros = $cantMaxPasajeros;
            $this->cantPasajeros = $cantPasajeros;
            $this->pasajerosViaje = array();
        }

        public function getPasajero() {
          return $this->pasajero;
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

       /*public function agregarPasajero($nombre, $apellido, $nroDocumento, $telefono) {
        $pasajero = new Pasajero($nombre, $apellido, $nroDocumento, $telefono);
        $this->pasajerosViaje[] = $pasajero;
      }*/
      
      public function agregarPasajero2($pasajero) {
        $nroDocumento = $pasajero->getNroDocumento();
        if ($this->buscarPasajero($nroDocumento) !== null) {
          $cadena = "El pasajero con número de documento " . $nroDocumento . " ya está registrado en el viaje.\n" ;
      } else {
        $this->pasajerosViaje[] = $pasajero;
        $cadena= "el pasajero fue agregado exitosamente";
      }
      return $cadena;
      }

      public function buscarPasajero($nroDocumento) {
        foreach ($this->pasajerosViaje as $pasajero) {
            if ($pasajero->getNroDocumento() === $nroDocumento) {
                 return $pasajero;
            }
        }
        return null;
      }

      public function quitarPasajeros($nroDocumento) {
        foreach ($this->pasajerosViaje as $key => $value) {
          if ($value['numeroDocumento'] == $nroDocumento) {
            unset($this->pasajerosViaje[$key]);
            break;
          }
        }
      }

       public function modificarPasajeros($indice, $nuevoNombre, $nuevoApellido, $nuevoNumeroDocumento, $nuevoTelefono) {
        if($indice >= 0 && $indice < count($this->pasajerosViaje)) {
          $pasajero = [
            'nombre' => $nuevoNombre,
            'apellido' => $nuevoApellido,
            'numDoc' => $nuevoNumeroDocumento,
            'telefono' => $nuevoTelefono
          ];
          $this->pasajerosViaje[$indice] = $pasajero;
          return true;
        } else {
          return false;
        }
      }

      /*public function mostrarDatos() {
        echo "Código de viaje: " . $this->codigo . "\n";
        echo "Destino: " . $this->destino . "\n";
        echo "Cantidad máxima de pasajeros: " . $this->cantMaxPasajeros . "\n";
        $pasajeros = $this->pasajerosViaje;
        if(empty($pasajeros) == true) {
            echo "No hay pasajeros en el viaje\n\n";
        } else {
            echo "Pasajeros actuales: " . $this->cantPasajeros . "\n\n";
            foreach($pasajeros as $index => $pasajero) {
              echo "Pasajero " . ($index + 1) . ":\n";
              echo "Nombre: " . $pasajero["nombre"] . "\n";
              echo "Apellido: " . $pasajero["apellido"] . "\n";
              echo "Número de documento: " . $pasajero["numeroDocumento"] . "\n\n";
          }
        }
      }*/

      public function __toString() {
        return "Codigo de viaje: " . $this->codigo . "\n" . "Destino del viaje: " . $this->destino . "\n" . "Cantidad máxima de pasajeros: " . $this->cantMaxPasajeros . "\n\n";
      }
    
      public function mostrarPasajeros() {
        $pasajeros = $this->pasajerosViaje;
        $cadena = "---PASAJEROS--- \n";
        foreach($pasajeros as $index => $pasajero) {
          $cadena .= "Pasajero " . ($index + 1) . "\n" . "Nombre: " . $pasajero->getNombre() . "\n" . "Apellido: " . $pasajero->getApellido() . "\n" . "Número de Documento: " . $pasajero->getNroDocumento() . "\n" . "Número de telefono: " . $pasajero->getTelefono() . "\n \n";
        }
        return $cadena;
      }
    }