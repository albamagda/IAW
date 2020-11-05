<?php

    $teacher = array(
        'Fidel',
        'Javier Cuadrado',
        'Marisol',
        'Roberto',
        'Florindo' 
    );

    $subjets = array(
        'Seguridad y Alta Disponibilidad',
        'Servicios en Red e Internet',
        'Implantación de Aplicaciones Web', 
        'Empresa e Iniciativa Emprendedora',
        'Administración de Sistemas Gestores de Bases de Datos',
        'Administración de Sistemas Operativos'
    );

    function RandArray($array){
        return $array[rand (0, count ($array) - 1)];
    }

    echo "El profesor" RandArray($teacher) "impartirá la asignatura" RandArray($subjets);