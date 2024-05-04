<?php

namespace App\Src\Services\User\traits;

trait SetTable
{
    private function setTable(): void
    {
        $this->table = 'users';
    }

    private function table(): string
    {
        return $this->table;
    }
}