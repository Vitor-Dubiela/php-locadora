<?php

namespace src\Core\Controllers;

use src\Core\Models\Account;

class ClientController
{
    public array $clientsArray;
    private Account $account;

    public function post()
    { 
        $client = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'adress' => $_POST['adress'],
            'birthDate' => $_POST['birthDate'],
            'cpf' => $_POST['cpf'],
            'createdAt' => $_POST['createdAt']
        ];
        $this->account = new Account($client);
        $this->clientsArray[] = $this->account;
        return $this->account;        
    }
}