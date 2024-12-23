<?php

namespace app\models;

class Crud extends Connection
{
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

            if (!$nome || !$email) {
                throw new \Exception("Os campos nome e e-mail são obrigatórios e devem ser válidos.");
            }

            $conn = $this->connect();
            $sql = "INSERT INTO person (nome, email) VALUES (:nome, :email)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            return $stmt;
        }
    }
    public function read()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM person";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    public function update()
    {

    }
    public function delete()
    {

    }
}