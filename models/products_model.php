<?php
//include ('abstract_model.php');

class ProductsModel extends AbstractModel
{
    /*public function getDataFromDB($db,$lol)
    {
        $code = mysqli_real_escape_string($db, $lol);

        $query = "SELECT ID, Name FROM models WHERE CountryCode = '$code'";
        $res = mysqli_query($db, $query);

        $data = '';
        while ($row = mysqli_fetch_assoc($res)) {
            $data[$row['ID']] = $row['Name'];
        }

        return json_encode($data);
    }*/
    /*public function ReturnDb($db,$lol)
    {
    getDataFromDB($db, 'models', $lol);
    }*/
}