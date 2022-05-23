<?php 

class Application{

    private $dbParams = array(
        "servername" => 'localhost',
        "username" => 'root',
        "password" => 'Passw123',
        "dbname" => 'library'
    );

    private $connection;
    private $connectionLive = false;

    public function __construct()
    {
        $this->connectDb();
    }

    private function connectDb(){
        $this->connection = new mysqli($this->dbParams['servername'],$this->dbParams['username'],$this->dbParams['password'], $this->dbParams['dbname']);

        if ($this->connection->connect_error){
            die('Connection failed: '.$this->connection->Conncent_error);
        }
        $this->connectionLive = true;
    }
}

?>