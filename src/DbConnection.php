<?php

namespace App;
require "../vendor/autoload.php";
class DbConnection
{
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;

    public function __construct()
    {
        $this->servername = "127.0.0.1";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "Books";
    }

    public function dbConnect()
    {
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$conn) {
            die("Connection error: " . mysqli_connect_errno());
        } else {
            return $conn;
        }
    }

    public function queryAllEntries()
    {

    }
}

$test = new DbConnection();
