<?php

namespace Curso;

class ejecutable 
{
    public function GetStudents()
    {
        $ListS = array();

        $student = new alumno('Jose', 23, 'M');
        array_push($ListS,$student);

        $student = new alumno('Franmy', 21, 'F');
        array_push($ListS,$student);

        $student = new alumno('Migdaly', 21, 'F');
        array_push($ListS,$student);

        $student = new alumno('Eiker', 23, 'M');
        array_push($ListS,$student);

        $student = new alumno('Ibelise', 17, 'F');
        array_push($ListS,$student);

        $student = new alumno('Pedro', 23, 'M');
        array_push($ListS,$student);

        return $ListS;
    }
}
