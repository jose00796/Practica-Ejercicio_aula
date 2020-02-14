<?php

namespace Curso;

class alumno extends persona 
{
    const ASIST = 100;

    protected $score;
    protected $prome;
    protected $present;

    public function __construct($name, $age, $sex)
    {
        parent:: __construct($name, $age, $sex);
    }

    public function SetScore()
    {
        $i = 0;
        $suma = 0;

        while($i < 4) {

            $this->score = rand(0,10);
            $suma = $suma + $this->score;
            $i++;
        }

        return $this->prome = $suma / 4;
    }

    public function GetScore()
    {
        $this->SetScore();
        Show("Promedio Final del Estudiante : {$this->GetName()} = {$this->prome}");
    }

    public function GetProme()
    {
        return $this->prome;
    }

    public function GetPresent()
    {
        return $this->present;
    }

    public function Assistance()
    {
        $probabily = rand(0,100);
        $test = ($probabily * 50) / static::ASIST;

            if ($test >= 25) {
                
                Show(" El Estudiante {$this->GetName()} Asistio Hoy");
                $this->present = true;
            }
            elseif ($test < 25) {
                
                Show(" El Estudiante {$this->GetName()} No vino por Vaca");
                $this->present = false;

            }
    }
}
