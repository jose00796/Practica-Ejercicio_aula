<?php

namespace Curso;

abstract class persona 
{
    protected $name;
    protected $age;
    protected $sex;

    public function __construct($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetAge()
    {
        return $this->age;
    }

    public function GetSex()
    {
        return $this->sex;
    }
}
