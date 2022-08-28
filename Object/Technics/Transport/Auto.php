<?php

declare(strict_types=1);

namespace Object\Technics;



class Auto
{
    public string $nameAuto = "Ford";
    public int $yearCreate = 2020;
    public int $fullYears;

    public function setFullYears(int $yearCreate, int $fullYears): void
    {
        $this->$fullYears = 2022 - $yearCreate;
    }
    public function setFullDescription(string $nameAuto, int $fullYears): void
    {
        echo 'Название' . $nameAuto . ', возраст' . $fullYears;
    }
}