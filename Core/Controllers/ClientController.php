<?php

namespace src\Core\Controllers;

use src\Core\Models\Account;
use src\Core\Request;
use src\Core\Services\ClientService;

class ClientController
{
    private Account $account;
    private ClientService $clientService;
    public SiteController $siteController;

    public function __construct()
    {
        $this->clientService = new ClientService();
        $this->siteController = new SiteController();
    }

    public function post(Request $request)
    {
        $checkBody = $this->clientService->checkPost();
        if ($checkBody === false) {
            return "error";
        }
        $body = $request->getBody();
        $this->account = new Account();
        $ok = $this->account->create($body);
        if ($ok) {
            return $this->siteController->login();
        }
        return $this->account;
    }
    
    public function get()
    {
        $this->account = new Account();
        $array = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];
        $account = $this->account->read($array);
        if ($account === false) {
            return "false";
        }
        return $account->username;
    }
}
