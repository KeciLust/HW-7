<?php

declare(strict_types=1);

namespace Object\Technics;

class Tv
{
    public string $nameTv = 'Samsung';
    public int $diagonal;
    public bool $modern = true;

    public function setFullDescription(string $nameTv, int $diagonal): void
    {
        echo 'Название' . $nameTv . ', диагональ' . $diagonal;
    }

    public function modern(bool $modern): void
    {
        if ($modern) {
            echo 'Это современный TV';
        } else {
            echo 'Это не слвременный TV';
        }
    }
}