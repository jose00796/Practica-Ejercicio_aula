<?php
// SUBJET ES ASIGNATURA DOCTOR.


//28/01/2020 AQUI HAY UNA LOCURA GUAPO, POR FAVOR ARREGLALO...
//29/01/2020 VA MUY BIEN PINGUINITO, OJALA MAÑANA PUEDAS TERMINARLO Y SI LO LOGRAS TE LANZAS UNA BUENA PORNO DE VIOLET STARR :)
//14/02/2020 DIA DEL SOLTERO ETERNO; AUN NO TERMINAS ESTA VAINA FLOJO DE MIERDA...

namespace Curso;

use Psy\ExecutionLoop;
use student;

class aula 
{
    const MAX_STUDENT = 6;//PUEDE SER QUE HAGA FALTA QUITAR ESTA CONSTANTE...

    protected $matter;
    protected $Check = 0;
    protected $cont;
    protected $subjet = array('Matematica', 'Programacion', 'Delicioso');

    public function __construct($matter, profesor $teacher)
    {
        $this->matter = $matter;
        $this->teacher = $teacher;
    }

    public function GetMatter()
    {
        return $this->matter;
    }

    public function MatterExists()
    {
        if (in_array($this->matter, $this->subjet)) {
            Show("La materia {$this->matter} esta disponible entre las opciones");
        }else {
            Show("La materia {$this->matter} NO esta disponible entre las opciones");
        }
    }

    public function TeacherAssistance(profesor $teacher)
    {
        $teacher->Assistance();
        $teacher->GetPresent();
        
        if ($teacher->GetPresent() == true) {
            $this->Check++;
        }
    }

    public function CorrectTeacher(profesor $teacher)
    {
        if ($this->GetMatter() == $teacher->GetMatter()) {
            Show("{$teacher->GetName()} Imparte la Materia correspondiente al aula de : {$this->GetMatter()}");
            $this->Check++;
        }
        elseif ($this->GetMatter() != $teacher->GetMatter()) {
            Show("{$teacher->GetName()} NO tiene nada que hacer aqui, Fuera Basura ");
            $this->Check = 0;
        }
    }

    public function GetCont()
    {
        return $this->cont;
    }

    //FALTA CREAR UN METODO O FORMA DE PREGUNTAR SI LA CANTIDAD DE ALUMNOS PRESENTE ES MENOR A 3...

    public function StudentAssistance(alumno $student)
    {
        if ($student->GetPresent() == true) {
            $this->cont++;
        }

        if ($this->GetCont() >= 3) {
            Show("Cantidad de Alumnos Presentes es igual a : {$this->GetCont()}, suficiente");
            $this->Check++;
        }
    }

    //ESTE METODO HABILITARA EL AULA DE CLASES SI SE CUMPLEN TODAS LAS CONDICIONES.
    public function OpenRoom()
    {
       switch ($this->Check) {
           case '1':
               Show(" SE CUMPLE LA PRIMERA CONDICION");
               break;
           
            case '2':
                Show(" SE CUMPLE LA SEGUNDA CONDICION");
            break;

            case '3':
                Show(" SE CUMPLE LA TERCERA CONDICION");
            break;

           default:
               # code...
               break;
       }
    }
}
