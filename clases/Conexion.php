<?php

class Conexion {

    private $server = "localhost:3306";
    private $username = "root";
    private $password = "";
    private $database = "urgencias_duoc";
    private $link;

    function __construct() {
        $this->link = mysqli_connect($this->server, $this->username, $this->password, $this->database);
        $this->link->set_charset("utf8");
    }

    public function query($sql) {
        return $this->link->query($sql);
    }

}
