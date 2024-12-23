<?php

namespace app\models;
// connect to sqlite database
abstract class Connection
{
    private $db;

    protected function connect()
    {
        try {
            $this->db = new \PDO("sqlite:". __DIR__ ."/../../database.sqlite");
            return $this->db;
        } catch (\PDOException $e) {
            echo '<pre>';
            echo $e->getMessage();
            echo '</pre>';
        }
    }
}