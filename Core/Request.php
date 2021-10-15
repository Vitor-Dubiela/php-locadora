<?php

namespace src\Core;

class Request
{
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getPath()
    {
        return $_SERVER['REQUEST_URI'] ?? '/';
    }
}
