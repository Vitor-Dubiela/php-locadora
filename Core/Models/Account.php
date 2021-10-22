<?php

namespace src\Core\Models;

class Account extends Client
{
    public string $username;
    public string $password;

    public function __toString(): string
    {
        $dt = $this->createdAt->format('Y-m-d H:i:s');
        return "Name: $this->name <br>
                Email: $this->email <br>
                Phone: $this->phone <br>
                Adress: $this->adress <br>
                Birthdate: $this->birthDate <br>
                CPF: $this->cpf <br>
                Created At: $dt <br>";
    }

    public function create($properties = [])
    {
        foreach ($properties as $key => $value) {
            $this->$key = $value;
        }
    }

    public function read($cpf) : Account
    {
        $account = new Account($props = []);
        return $account;
    }

    public function update($cpf)
    {
    }

    public function delete($cpf)
    {
    }
}