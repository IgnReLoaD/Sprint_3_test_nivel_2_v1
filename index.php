
<!-- ENUNCIADO:

    1. Tenemos el modelo Coche (cilindrada, marca, matric, tipo_combustible (gasolina, gasoil, hibrido, elec), color)
    2. Tendremos un total de 6 coches almacenados
    3. Tendremos 2 procesos:
        3.1. proceso que pinte:  pares en azul, impares en rojo
        3.2. proceso que muestre:  listar marcas de los coches de gasolina (no especifica si repetidos o no)
 -->

<?php

// POO Classes 
include('./Coche.php');
include('./Concesionario.php');

    // echo "se ejecuta";
    $arrGaraje = array();

    // ENTRADA DE DATOS 
    $objCoche = new Coche(1,'BMW',2500,'1234DRS','','Gasolina');
    array_push($arrGaraje, $objCoche);
    $objCoche = new Coche(2,'MCD',3000,'1234CRS','', 'Gasolina');
    array_push($arrGaraje, $objCoche);
    $objCoche = new Coche(3,'AUDI',2000,'1234DRS','','Gasoil');
    array_push($arrGaraje, $objCoche);
    $objCoche = new Coche(4,'ALFA',1500,'1234DRS','','Hybrido');
    array_push($arrGaraje, $objCoche);
    $objCoche = new Coche(5,'VOLVO',2000,'1234DRS','','Gasolina');
    array_push($arrGaraje, $objCoche);
    $objCoche = new Coche(6,'RENAULT',1500,'1234DRS','','Electrico');
    array_push($arrGaraje, $objCoche);    
    // var_dump($arrGaraje);

    // LOGICA DE DATOS
    $objConcesionario = new Concesionario($arrGaraje);
    $objConcesionario->paintForEach();
    $objConcesionario->paintFor();

    // SALIDA DE DATOS
    $objConcesionario->listarGasolina();

?>