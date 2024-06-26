<?php

namespace App\Core\Session;

interface SessionInterface
{
    public function set(string $key, $value): void;

    public function get(string $key, $default = null): mixed;

    public function getFlash(string $key, $default = null): mixed;

    public function has(string $key): bool;

    public function remove(string $key): void;

    public function destroy(): void;

    public function setColumn(string $key, string $column, mixed $value): void;

    public function getColumn(string $key, string $column, $default = null): mixed;
}