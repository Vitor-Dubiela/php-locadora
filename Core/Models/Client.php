<?php

namespace src\Core\Models;

use DateTime;

abstract class Client
{
    public string $name;
    public string $email;
    public string $phone;
    public string $adress;
    public DateTime $birthDate;
    public string $cpf;
    public DateTime $CreatedAt;
    
    public function __construct($properties = [])
    {
        $this->create($properties);
    }

    abstract public function __toString() : string;
    abstract protected function create($properties = []);
    abstract protected function read(string $cpf) : Account;
    abstract protected function update(string $cpf);
    abstract protected function delete(string $cpf);
}
