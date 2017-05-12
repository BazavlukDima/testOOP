<?php
abstract class AbstractModel
{
    public function returnQuery($query)
    {
        return mysqli_query($this->makeConnection(), $query);
    }

    public function returnFetch($res)
    {
        return mysqli_fetch_assoc($res);
    }

    public function returnFetchAll($res)
    {
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    public function tableConnection($path, $log, $pass, $table)
    {
        return mysqli_connect($path, $log, $pass, $table);
    }

    public function tableCharset($db, $type)
    {
        return mysqli_set_charset($db, $type);
    }

    public function makeConnection()
    {
        $db = $this->tableConnection("localhost", "root", "", "test") or die("No connection with DB");
        $this->tableCharset($db, "utf8") or die("Don't set charset of connection");

        return $db;
    }

    public function getDataFromDB($table,$prev)//getallrow
    {
        $code = mysqli_real_escape_string($this->makeConnection(), $prev);

        $query = "SELECT ID, Name FROM $table WHERE CountryCode = '$code'";
        $res = $this->returnQuery($query);

        $data = '';
        while ($row = $this->returnFetch($res)) {
            $data[$row['ID']] = $row['Name'];
        }

        echo json_encode($data);
    }

    public function getType()
    {

        $query = "SELECT Code, Name FROM type";

        $res = $this->returnQuery($query);
        $dataArr = $this->returnFetchAll($res);

        return $dataArr;
    }
}
