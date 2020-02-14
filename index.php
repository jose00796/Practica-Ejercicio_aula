<?php

namespace Curso;

require "src/helpers.php";
spl_autoload_register(function($classname){
       
    if (strpos($classname, 'Curso\\') === 0) {
            $classname = str_replace('Curso\\','',$classname);

            if (file_exists("src/$classname.php")) {
                require "src/$classname.php";
            }
        }
});

//30/01/2020 ME PARECE UNA BUENA IDEA PASAR EL PROFESOR COMO UNA DEPENDENCIA MEDIANTE EL CONSTRUCTOR DEL OBJETO ROOM
//TRATA DE DESARROLLAR ESTA IDEA GUAPO.

//VE SI TE PONES A TRABAJAR EN ESTA MIERDA COÑO E TU PEPA...

$student = new ejecutable();

$ListS = $student->GetStudents();

foreach ($ListS as $student) {
    Show("{$student->GetName()}");
    $student->Assistance();
}