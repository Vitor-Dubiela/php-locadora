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
                Username: $this->username <br>
                Password: $this->password <br>
                Created At: $dt <br>";
    }

    public function create($properties = [])
    {
        foreach ($properties as $key => $value) {
            $this->$key = $value;
        }
        // verify if theres another user account with the same cpf and email
        // if there is, return false
        // otherwise return true
        return true; # returning true untill the DB be implemented
    }

    public function read($properties = [])
    {
        $account = new Account();
        $account->username = 'vitor@gmail.com';
        $account->password = 'vitor';
        if (
            $properties['username'] === $account->username && 
            $properties['password'] === $account->password
        ) {
            return $account;
        }
        return false;
    }

    public function update($cpf)
    {
    }

    public function delete($cpf)
    {
    }
}