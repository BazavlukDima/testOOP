<?php
require_once ('./models/abstract_model.php');

class SubTypeModel extends AbstractModel
{
    public function getDataFromDbSubType($prev)
    {
        $code = $this->escapeString($prev);

        $query = "SELECT ID, Name FROM subt WHERE CountryCode = '$code'";
        $res = $this->returnQuery($query);

        return $this->getRow($res);
    }
}
