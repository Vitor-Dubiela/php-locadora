<?php

namespace src\Core\Services;

use DateTime;

class ClientService
{
    public function checkClient()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $adress = $_POST['adress'];
        $birthDate = $_POST['birthDate'];
        $cpf = $_POST['cpf'];
        if (
            !empty($name) &&
            !empty($email) &&
            !empty($phone) &&
            !empty($adress) &&
            !empty($birthDate) &&
            !empty($cpf)
        ) {
            return $client = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'adress' => $adress,
                'birthDate' => $birthDate,
                'cpf' => $cpf,
                'createdAt' => new DateTime()
            ];
        }
        return false;
    }
}
