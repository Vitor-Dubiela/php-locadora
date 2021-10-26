<?php

namespace src\Core\Models;

use DateTime;

abstract class Client
{
    public string $name;
    public string $email;
    public string $phone;
    public string $adress;
    public string $birthDate;
    public string $cpf;
    public DateTime $createdAt;

    abstract public function __toString() : string;
    abstract protected function create($properties = []);
    abstract protected function read($properties = []);
    abstract protected function update(string $cpf);
    abstract protected function delete(string $cpf);
}
