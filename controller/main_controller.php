<?php
require ('./models/abstract_model.php');
require('./models/type_model.php');
require('./models/sub_type_model.php');
require('./models/products_model.php');

class MainController
{
    public function viewReturn()
    {
        include ('./view/main_view.php');
    }

    public function typeAction()
    {
        $typeOfProd = new typeModel();

        return $typeOfProd->getType();
    }

    public function subTypeAction()
    {
        $SubTypeResult = new SubTypeModel();

        return $SubTypeResult->getDataFromDB('subt', $_POST['code']);
    }

    public function prodAction()
    {
        $prodResult = new ProductsModel();

        return $prodResult->getDataFromDB('models', $_POST['lol']);
    }
}
