<?php

namespace Curso;

use Exception;

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

//22/03/2020 COOOOOOOOÑO DOCTORISIMO POR FIN DEJO DE PESARTE EL CULO Y TERMINASTE ESTE PROGRAMA VALE...
//QUEDO DEMASIADO SEXY AHORA VE SI LO PUEDES PASAR A ANGULAR CON ALGUNOS ESTILOS...

$student = new ejecutable();

$teacher1 = new profesor('Violett Starr', 23, 'F', 'Delicioso');
$teacher2 = new profesor('Kendra Lust', 45, 'F', 'Programacion');
$teacher3 = new profesor('Mia Malkova', 25, 'F', 'Matematica');

$room = new aula("Matematica", $teacher3);

$ListS = $student->GetStudents();

foreach ($ListS as $student) {    
    Show("{$student->GetName()}");
    $student->Assistance();
    $student->GetScore();

    $teacher1->Approve($student);

    $room->StudentAssistance($student);
} 

$room->StudentEnough();

$teacher1->GetApprove();
$teacher1->GetRep();
$teacher1->GetObs();

$room->OpenRoom();
