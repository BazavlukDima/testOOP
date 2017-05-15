<?php

abstract class AbstractModel
{
    private $serverName;
    private $username;
    private $password;
    private $dbName;

    public $connection;

    public function __construct()
    {
        $this->serverName = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbName = 'test';
        $this->connection = mysqli_connect($this->serverName, $this->username, $this->password, $this->dbName);
    }

    public function returnQuery($query)
    {
        return mysqli_query($this->connection, $query);
    }

    public function returnFetch($res)
    {
        return mysqli_fetch_assoc($res);
    }

    public function returnFetchAll($res)
    {
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    public function escapeString($prev)
    {
        return mysqli_real_escape_string($this->connection, $prev);

    }

    public function getRow($res)
    {
        $data = '';
        while ($row = $this->returnFetch($res)) {
            $data[$row['ID']] = $row['Name'];
        }

        return $data;
    }
}
