<?php

namespace src\Core\Controllers;

use src\Core\Models\Account;
use src\Core\Services\ClientService;

class ClientController
{
    public array $clientsArray;
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
        $this->account = new Account($client);
        $this->clientsArray[] = $this->account; #insert the client into the DB
        return $this->siteController->renderAcctForm($this->account);
    }
}
