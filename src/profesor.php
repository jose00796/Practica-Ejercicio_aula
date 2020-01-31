<?php

namespace Curso;

class profesor extends persona 
{
    const ASIST = 100;

    protected $present = false;
    protected $matter;

    public  function __construct($name, $age, $sex, $matter)
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

            if ($probabily >= 10) {
                
                Show(" El Profesor {$this->GetName()} Asistio Hoy");
                $this->present = true;

            }
            elseif ($probabily < 10) {
                
                Show(" El Profesor {$this->GetName()} No vino por Lacra");
                $this->present = false;
                
            }
    }
}
