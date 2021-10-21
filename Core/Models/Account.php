<?php

namespace src\Core\Models;

class Account extends Client
{
    public string $username;
    public string $password;

    public function __toString(): string
    {
        return "Name: $this->name <br>Email: $this->email <br>Phone: $this->phone";
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