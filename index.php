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

$teacher1 = new profesor('Violett Starr', "23", 'F', 'Delicioso');
$teacher2 = new profesor('Guardiola', 50, 'M', 'Programacion');
$teacher3 = new profesor('Light Yagami', 23, 'M', 'Dios del nuevo Mundo');
$teacher4 = new profesor('Mia Malkova', 25 ,'F', 'Matematica');

$room = new aula('Delicioso', $teacher1);

$ListS = $student->GetStudents();

foreach ($ListS as $student) {    
    Show("{$student->GetName()}");
    $student->Assistance();
    $student->GetScore();

    $teacher1->Approve($student);
    $room->StudentAssistance($student);
} 

$room->OpenRoom();
