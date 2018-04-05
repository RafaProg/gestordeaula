<?php

namespace Code\DB;

class Persistence
{

    private $conn;
    const HOSTNAME = '127.0.0.1';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DBNAME = 'gestordeaula';

    public function __construct()
    {

        try {

            $this->conn = new \PDO(
                "mysql:dbname=" . Persistence::DBNAME . "; host=" . Persistence::HOSTNAME,
                Persistence::USERNAME,
                Persistence::PASSWORD
            );

        } catch (PDOException $e) {

            echo 'Erro: ' . $e->getMessage();

        }

    }

    public function runQuery(string $query, array $params)
    {

        $stmt = $this->conn->prepare($query);

        $this->setParams($stmt, $params);

        $stmt->execute();

    }

    public function select($query, $params = array()) : array
    {

        $stmt = $this->conn->prepare($query);

        $this->setParams($stmt, $params);

        $stmt->execute();

        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $results;

    }

    public function setParams($stmt, $params = array())
    {

        foreach ($params as $key => $value) {

            $this->bindParams($stmt, $key, $value);

        }

    }

    public function bindParams($stmt, $key, $value)
    {

        $stmt->bindParam($key, $value);

    }

}