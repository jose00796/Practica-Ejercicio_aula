<?php
/* 8) Queremos representar con programación orientada a objetos, un aula con estudiantes y un profesor.
Tanto de los estudiantes como de los profesores necesitamos saber su nombre, edad y sexo. 
De los estudiantes, queremos saber también su calificación actual (entre 0 y 10) y del profesor que materia da.
Las materias disponibles son matemáticas, filosofía y física.
Los estudiantes tendrán un 50% de hacer novillos, 
por lo que si hacen novillos no van a clase pero aunque no vayan quedara registrado en el aula (como que cada uno tiene su sitio).
El profesor tiene un 20% de no encontrarse disponible (reuniones, baja, etc.)
Las dos operaciones anteriores deben llamarse igual en Estudiante y Profesor (polimorfismo).

El aula debe tener un identificador numérico, el número máximo de estudiantes y para que esta destinada 
(matemáticas, filosofía o física). Piensa que más atributos necesita.

Un aula para que se pueda dar clase necesita que el profesor esté disponible, 
que el profesor de la materia correspondiente en el aula correspondiente (un profesor de filosofía no puede dar en un aula de matemáticas)
y que haya más del 50% de alumnos.

El objetivo es crear un aula de alumnos y un profesor y determinar si puede darse clase, teniendo en cuenta las condiciones antes dichas.
Si se puede dar clase mostrar cuantos alumnos y alumnas (por separado) están aprobados de momento (imaginad que les están entregando las notas).
NOTA: Los datos pueden ser aleatorios (nombres, edad, calificaciones, etc.) siempre y cuando tengan sentido
(edad no puede ser 80 en un estudiante o calificación ser 12). */

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

$teacher = new profesor('Violet Starr', 25, 'F', 'Follar');
$teacher2 = new profesor('Mia Malkova', 25, 'F', 'Matematica');
$teacher3 = new profesor('ALL Might', 55, 'M', 'Programacion');

$room = new aula('Follar');

$student = new alumno('Jose', 23, 'M');

$student->Assistance();
$student->Assistance();
$student->Assistance();

$student->GetScore();
$teacher->Approve($student);

$room->TeacherAssistance($teacher);
$room->StudentAssistance($student);//AUN FALTAN UNAS COSAS
$room->CorrectTeacher($teacher);
$room->OpenRoom();