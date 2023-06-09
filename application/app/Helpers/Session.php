<?php

namespace App\Helpers;

class Session
{
    public function set(string $path, mixed $value = null, string $separator = '.'): void
    {
        session_start();
        dot()->set($_SESSION, $path, $value, $separator);
        session_write_close();
    }

    public function get(string $path, string $separator = '.'): mixed
    {
        return dot()->get($_SESSION, $path, $separator);
    }

    public function del(string $path, string $separator = '.'): void
    {
        session_start();
        dot()->del($_SESSION, $path, $separator);
        session_write_close();
    }

    public function exists(string $path, string $separator = '.'): bool
    {
        return dot()->exists($_SESSION, $path, $separator);
    }

    public function noexists(string $path, string $separator = '.'): bool
    {
        return !$this->exists($path, $separator);
    }

    public function destroy(): void
    {
        session_start();
        session_unset();
        session_destroy();
    }
}
