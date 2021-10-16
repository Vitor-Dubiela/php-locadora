<?php

namespace src\Core;

class Response
{
    public function setStatusCode($statuscode)
    {
        http_response_code($statuscode);
    }
}