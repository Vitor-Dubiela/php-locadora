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
        $password = $_POST['password'];
        if (
            !empty($name) &&
            !empty($email) &&
            !empty($phone) &&
            !empty($adress) &&
            !empty($birthDate) &&
            !empty($cpf) &&
            !empty($password)
        ) {
            // CHECK DB IF CPF IS VALID
            // IF IT IS, KEEP THE PROCEDURE
            // OTHERWISE RETURN 'CPF NOT VALID. YOU MAY TRY IT AGAIN.'
            return $client = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'adress' => $adress,
                'birthDate' => $birthDate,
                'cpf' => $cpf,
                'password' => $password,
                'username' => $email,
                'createdAt' => new DateTime()
            ];
        }
        return false;
    }
}
