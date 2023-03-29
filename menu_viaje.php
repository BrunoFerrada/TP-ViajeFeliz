<?php

require_once('viajefeliz.php');

$opcion = 0;
while ($opcion != 4) {
    echo "Menú:\n";
    echo "1. Cargar información del viaje. \n";
    echo "2. Modificar información del viaje. \n";
    echo "3. Ver información del viaje. \n";
    echo "4. Salir. \n";
    echo "Ingrese una opción: ";
    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case 1:
            echo "Ingrese el código del viaje: ";
            $codigo = trim(fgets(STDIN));
            echo "Ingrese el destino del viaje: ";
            $destino = trim(fgets(STDIN));
            echo "Ingrese la cantidad máxima de pasajeros: ";
            $cantMaxPasajeros = trim(fgets(STDIN));
            $viaje = new Viaje($codigo, $destino, $cantMaxPasajeros);
            echo "¡Información del viaje cargada exitosamente!\n";
            break;
        case 2:
            $opcionModificacion = 0;
            echo "Menú de modificación:\n";
            echo "1. Modificar código del viaje.\n";
            echo "2. Modificar destino del viaje.\n";
            echo "3. Modificar cantidad máxima de pasajeros.\n";
            echo "4. Agregar pasajero.\n";
            echo "5. Modificar pasajero.\n";
            echo "6. Eliminar pasajeros.\n";
            echo "7. Regresar.\n";
            echo "Ingrese una opción: ";
            $opcionModificacion = trim(fgets(STDIN));
            switch ($opcionModificacion) {
                case 1:
                    echo "Ingrese el nuevo código del vaije: ";
                    $codigo = trim(fgets(STDIN));
                    $viaje->ponerCodigo($codigo);
                    echo "¡Código del viaje modificado exitosamente!\n";
                    break;
                case 2:
                    echo "Ingrese el nuevo destino de viaje: ";
                    $destino = trim(fgets(STDIN));
                    $viaje->ponerDestino($destino);
                    echo "¡Destino del viaje modificado exitosamente!\n";
                    break;
                case 3:
                    echo "Ingrese la nueva cantidad máxima de pasajeros: ";
                    $cantMaxPasajeros = trim(fgets(STDIN));
                    $viaje->ponerCantMaxPasajeros($cantMaxPasajeros);
                    echo "¡Cantidad máxima de pasajeros modificada exitosamente!\n";
                    break;
                case 4:
                    echo "Ingrese le nombre del pasajero: ";
                    $nombre = trim(fgets(STDIN));
                    echo "Ingrese el apellido: ";
                    $apellido = trim(fgets(STDIN));
                    echo "ingrese el número de documento del pasajero: ";
                    $numeroDocumento = trim(fgets(STDIN));
                    $pasajeros = array(
                        'nombre' => $nombre,
                        'apellido' => $apellido,
                        'numero de documento' => $numeroDocumento
                    );
                    $viaje->agregarPasajeros($pasajeros);
                    echo "¡Pasajero agregado exitosamente!\n";
                    break;
                case 5:
                    echo "";
            }

    }
}