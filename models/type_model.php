<?php
require_once ('./models/abstract_model.php');

class typeModel extends AbstractModel
{
    public function getType()
    {
        $query = "SELECT Code, Name FROM type";

        $res = $this->returnQuery($query);
        $dataArr = $this->returnFetchAll($res);

        return $dataArr;
    }
}
