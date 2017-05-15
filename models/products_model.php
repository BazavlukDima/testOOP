<?php
require_once ('./models/abstract_model.php');

class ProductsModel extends AbstractModel
{
    public function getDataFromDbModels($prev)
    {
        $code = $this->escapeString($prev);

        $query = "SELECT ID, Name FROM models WHERE CountryCode = '$code'";
        $res = $this->returnQuery($query);

        return $this->getRow($res);
    }
}