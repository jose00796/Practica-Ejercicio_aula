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

$teacher = new profesor('Violet Starr', 25, 'F', 'Follar');
$teacher2 = new profesor('Mia Malkova', 25, 'F', 'Matematica');
$teacher3 = new profesor('ALL Might', 55, 'M', 'Programacion');

$room = new aula('Follar');

$student = new alumno('Jose', 23, 'M');

$student->Assistance();
$student->Assistance();
$student->Assistance();
$student->Assistance();
$student->GetScore();
$teacher->Approve($student);

$room->TeacherAssistance($teacher);
$room->StudentAssistance($student);//AUN FALTAN UNAS COSAS
$room->CorrectTeacher($teacher);
$room->OpenRoom();