<?php
// connect to database and execute a query
class Database {
    public $conection;
    public $statement;
    public function __construct($config, $username = 'root', $password = '') {
        

        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->conection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = []) {
        

        $this->statement = $this->conection->prepare($query);

        $this->statement->execute($params);
        return $this;

    }

    public function find() {
        return $this->statement->fetch();
    }

    public function findOrFail() {
        $result = $this->find();
        if (!$result) {
            abort(Response::NOT_FOUND);
        }
        return $result;
    }

    public function findAll() {
        return $this->statement->fetchAll();
    }
}