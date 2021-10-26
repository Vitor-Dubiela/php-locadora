<?php

namespace src\Core\Controllers;

use src\Core\Models\Account;
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

    public function post()
    {
        $client = $this->clientService->checkClient();
        if ($client === false) {
            return "error";
        }
        $this->account = new Account();
        $ok = $this->account->create($client);
        if ($ok) {
            return $this->siteController->login();
        }
        return $this->account;
    }
}
