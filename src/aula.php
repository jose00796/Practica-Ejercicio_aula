<?php
// SUBJET ES ASIGNATURA DOCTOR.


//28/01/2020 AQUI HAY UNA LOCURA GUAPO, POR FAVOR ARREGLALO...
//29/01/2020 VA MUY BIEN PINGUINITO, OJALA MAÑANA PUEDAS TERMINARLO Y SI LO LOGRAS TE LANZAS UNA BUENA PORNO DE VIOLET STARR :)

namespace Curso;

class aula 
{
    const MAX_STUDENT = 6;

    protected $matter;
    protected $Check = 0;
    protected $subjet = array('Matematica', 'Programacion', 'Follar');

    public function __construct($matter)
    {
        $this->matter = $matter;
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

    //LOS METODOS DE ASISTENCIA DE AQUI ESTAN SEXYS PERO HAY UN PAR DE COSAS QUE NO ME CUADRAN, REVISALO POR FAVOR GUAPO.

    public function StudentAssistance(alumno $student)
    {
        $student->Assistance();
        $student->GetPresent();

        if ($student->GetCont() > static::MAX_STUDENT) {
            Show("Curso lleno, te Jodiste");
        }
        elseif ($student->GetCont() >= 3) {
            Show("Cantidad de Alumnos Presentes suficiente");
            $this->Check++;
        }
        elseif($student->GetCont() < 3) {
            Show("Cantidad de Alumnos Insuficiente");
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
