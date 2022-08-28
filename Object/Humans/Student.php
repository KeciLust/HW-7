<?php

declare(strict_types=1);

namespace Object\Humans;

class Student
{

    public string  $name = "Denis";
    public string  $fullName = "Nikitin";

    public function setName(string $name): void
    {
        $this->$name = ucfirst($name);
    }

    public function setFullName(string $fullName): void
    {
        $this->$fullName = ucfirst($fullName);
    }
}