<?php

namespace Curso;

use Exception;

class profesor extends persona 
{
    const ASIST = 100;

    protected $present = false;
    protected $matter;
    protected $contApp = 0;
    protected $contRep = 0;
    protected $contObs = 0;
    protected $key = false;

    public function __construct($name, $age, $sex, $matter)
    {
        parent::__construct($name, $age, $sex);
        $this->matter = $matter;
    }

    public function GetMatter()
    {
        return $this->matter;
    }

    public function GetPresent()
    {
        return $this->present;
    }

    public function Assistance()
    {
        $probabily = rand(0,100);
        $test = ($probabily * 20) / static::ASIST;

            if ($test >= 10) {
                
                Log::Info(" El Profesor {$this->GetName()} Asistio Hoy <hr>");
                $this->present = true;

            }
            elseif ($test < 10) {
                
                Log::Info(" El Profesor {$this->GetName()} No vino por Lacra <hr>");
                $this->present = false;
                
            }
    }

    public function GetApprove()
    {
        Log::Info("Cantidad de Alumnos Aprobados : {$this->contApp}");
    }

    public function GetRep()
    {
        Log::Info("Cantidad de Alumnos Reprobados : {$this->contRep}");
    }

    public function GetObs()
    {
        Log::Info("Cantidad de Alumnos para Reparar : {$this->contObs}");
    }

    public function ValidateTeacher()
    {
        if ($this->GetMatter() == $this->GetMatter()) {
            $this->key = true;
        }
    }

    public function GetKey()
    {
        return $this->key;
    }

    public function Approve(alumno $student)
    {
        if ($this->GetKey() == true) {
            
            if ($student->GetProme() < 4) {
                Log::Info("{$student->GetName()} Esta Reprobado por BASURA <hr>");
                $this->contRep++;
            }
            elseif ($student->GetProme() >= 4 and $student->GetProme() <= 6) {
                Log::Info("{$student->GetName()} Puede ir a Reparacion <hr>");
                $this->contObs++;
            }
            elseif ($student->GetProme() > 6) {
                Log::Info("{$student->GetName()} Esta Aprobado :) <hr>");
                $this->contApp++;
            }
        } else{
            throw new Exception("Profesor no Coincide");
            
        }
    }
}
