<?php

namespace src\Core\Controllers;

use src\Core\Models\Account;
use src\Core\Services\ViewService;

class SiteController
{
    protected ViewService $viewService;
    public array $clientsArray;
    private Account $account;

    public function __construct()
    {
        $this->viewService = new ViewService();
    }

    public function home()
    {
        $params = [
            'name' => 'Its Fumas'
        ];
        return $this->viewService->renderView('home', 'Home', $params);
    }

    public function movies()
    {
        return $this->viewService->renderView('movies', 'Movies');
    }

    public function handleMovie()
    {
        $client = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone']
            // 'adress' => $_POST['adress'],
            // 'birthDate' => $_POST['birthDate'],
            // 'cpf' => $_POST['cpf'],
            // 'createdAt' => $_POST['createdAt']
        ];
        $this->account = new Account($client);
        $this->clientsArray[] = $this->account;
        return $this->account;  
    }
}
