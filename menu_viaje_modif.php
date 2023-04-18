<?php

include_once('viajefeliz_modif.php');
include_once('responsableV.php');

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
            echo "Ingrese el número del empleado: ";
            $nroEmpleado = trim(fgets(STDIN));
            echo "Ingrese el número de la licnecia: ";
            $nroLicencia = trim(fgets(STDIN));
            echo "Ingrese el nombre del responsable: ";
            $nombreR = trim(fgets(STDIN));
            echo "ingrese el apellido del responsable: ";
            $apellidoR = trim(fgets(STDIN));
            $responsableViaje = new RespondableV($nroEmpleado, $nroLicencia, $nombreR, $apellidoR);

            echo "Ingrese el código del viaje: ";
            $codigo = trim(fgets(STDIN));
            echo "Ingrese el destino del viaje: ";
            $destino = trim(fgets(STDIN));
            echo "Ingrese la cantidad máxima de pasajeros: ";
            $cantMaxPasajeros = trim(fgets(STDIN));
            echo "Ingrese la cantidad de pasajeros: ";
            $cantPasajeros = trim(fgets(STDIN));
            $viaje = new Viaje($codigo, $destino, $cantMaxPasajeros, $cantPasajeros, $responsableViaje);
            if ($cantPasajeros > $cantMaxPasajeros) {
                echo "Los pasajeros superan la capacidad máxima del viaje.\n\n";
                break;
            } else {
                for ($i = 0; $i < $cantPasajeros; $i++) {
                    echo "Ingrese el nombre del pasajero " . $i . ": ";
                    $nombre = trim(fgets(STDIN));
                    echo "Ingrese el apellido del pasajero " . $i . ": ";
                    $apellido =trim(fgets(STDIN));
                    echo "Ingrese el número de documento del pasajero " . $i . ": ";
                    $numeroDocumento = trim(fgets(STDIN));
                    echo "Ingrese el número de telefono del pasajero " . $i . ": ";
                    $telefono = trim(fgets(STDIN));
                    $viaje->agregarPasajero($nombre, $apellido, $numeroDocumento, $telefono);
            }
            echo "¡Información del viaje cargada exitosamente!\n\n";
            break;
        }
        case 2:
            $opcionModificacion = 0;
            while ($opcionModificacion != 7) {
                if (isset($viaje)) {
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
                            echo "¡Código del viaje modificado exitosamente!\n\n";
                            break;
                        case 2:
                            echo "Ingrese el nuevo destino de viaje: ";
                            $destino = trim(fgets(STDIN));
                            $viaje->ponerDestino($destino);
                            echo "¡Destino del viaje modificado exitosamente!\n\n";
                            break;
                        case 3:
                            echo "Ingrese la nueva cantidad máxima de pasajeros: ";
                            $cantMaxPasajeros = trim(fgets(STDIN));
                            $viaje->ponerCantMaxPasajeros($cantMaxPasajeros);
                            echo "¡Cantidad máxima de pasajeros modificada exitosamente!\n\n";
                            break;
                        case 4:
                            echo "Ingrese el nombre del pasajero: ";
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
                            $viaje->agregarPasajero2($pasajeros);
                            echo "¡Pasajero agregado exitosamente!\n\n";
                            break;
                        case 5:
                            echo "Ingrese el indice del pasajero que desee modificar: ";
                            $indice = trim(fgets(STDIN));
                            echo "Ingrese el nuevo nombre: ";
                            $nuevoNombre = trim(fgets(STDIN));
                            echo "Ingrese el nuevo apellido: ";
                            $nuevoApellido = trim(fgets(STDIN));
                            echo "Ingrese el nuevo número de documento: ";
                            $nuevoNumeroDocumentom = trim(fgets(STDIN));
                            echo "Ingrese el nuevo número de telefono: ";
                            $nuevoTelefono = trim(fgets(STDIN));
                            $viaje->modificarPasajeros($indice, $nuevoNombre, $nuevoApellido, $nuevoNumeroDocumentom, $nuevoTelefono);
                            echo "Pasajero modificado correctamente! \n";
                            break;
                        case 6:
                            echo "Ingrese el número de documento del pasajero que quiere eliminar: ";
                            $numeroDocumento = trim(fgets(STDIN));
                            $viaje->quitarPasajeros($numeroDocumento);
                            echo "¡Pasajero quitado con exito!\n\n";
                            break;
                        case 7:
                            echo "Regresando al menú principal...\n\n";
                            break; 
                        default:
                            echo "Opción invalida\n\n";
                            break; 
                        break;
                    break;
                    }          
                } else {
                    echo "Por favor, ingrese los datos del viaje antes de intentar modificarlos.\n\n";
                    break;
                }
            }
            break;
        case 3:
            if(isset($viaje)) {
                echo "---VIAJE--- \n";
                echo $responsableViaje . "\n";
                echo $viaje . "\n";
                $verPasajeros = $viaje->mostrarPasajeros();
                echo $verPasajeros;
            } else {
                echo "No se encontraron datos que mostrar, por favor, ingrese los datos del viaje.\n\n";
            }
            break;
        case 4:
            echo "Saliendo...\n\n";
            break;
        default:
            echo "Opción inválida\n\n";
            break;
        break;
    }
}