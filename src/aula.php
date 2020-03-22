<?php
// SUBJET ES ASIGNATURA DOCTOR.


//28/01/2020 AQUI HAY UNA LOCURA GUAPO, POR FAVOR ARREGLALO...
//29/01/2020 VA MUY BIEN PINGUINITO, OJALA MAÑANA PUEDAS TERMINARLO Y SI LO LOGRAS TE LANZAS UNA BUENA PORNO DE VIOLET STARR :)
//14/02/2020 DIA DEL SOLTERO ETERNO; AUN NO TERMINAS ESTA VAINA FLOJO DE MIERDA...

namespace Curso;

use Exception;

class aula 
{
    const MAX_STUDENT = 6;//PUEDE SER QUE HAGA FALTA QUITAR ESTA CONSTANTE...
    const MIN_STUDENT = 3;

    protected $matter;
    protected $Check = 0;
    protected $cont;
    protected $subjet = array('Matematica', 'Programacion', 'Delicioso');
    protected $open = false;

    public function __construct($matter, profesor $teacher)
    {
        $this->matter = $matter;
        $this->teacher = $teacher;
        $this->MatterExists();
        $this->CorrectTeacher($teacher);
        $this->TeacherAssistance($teacher);
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
            throw new Exception("La Materia Seleccionada = {$this->matter} No Existe entre las opciones");
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
            throw new Exception("El profesor {$teacher->GetName()} NO imparte la materia correspondiente a esta aula");
        }
    }

    public function GetCont()
    {
        return $this->cont;
    }

    public function StudentAssistance(alumno $student)
    {
        if ($student->GetPresent() == true) {
            $this->cont++;
        }
    } 

    public function StudentEnough(){
        
        if ($this->GetCont() >= static::MIN_STUDENT ) {
            $this->Check++;
        }
    }

    public function GetCheck(){
        return $this->Check;
    }

    public function Key(){

        if ($this->GetCheck() == 3) {
            return $this->open = true;
        }else{
            return $this->open = false;
        }

    }

    //ESTE METODO HABILITARA EL AULA DE CLASES SI SE CUMPLEN TODAS LAS CONDICIONES.
    public function OpenRoom()
    {
       switch ($this->Key()) {
    
            case false:
               throw new Exception("No se cumplen todas la condiciones para abrir el aula, Verificar Por Favor...");
               
            break;

            case true:
                Show(" AULA DE {$this->GetMatter()} HABILITADA POR CUMPLIR TODAS LAS CONDICIONES");
            break;

           default:
               # code...
               break;
       }
    }
}
