<?php

namespace src\Core\Controllers;

use src\Core\Models\Account;
use src\Core\Services\ClientService;

class ClientController
{
    public array $clientsArray;
    private Account $account;
    private ClientService $clientService;

    public function __construct()
    {
        $this->clientService = new ClientService();
    }

    public function post()
    {
        $client = $this->clientService->checkClient();
        if ($client === false) {
            return "error";
        }
        $this->account = new Account($client);
        $this->clientsArray[] = $this->account;
        return $this->account;
    }
}
