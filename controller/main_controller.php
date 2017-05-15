<?php
require('./models/type_model.php');
require('./models/sub_type_model.php');
require('./models/products_model.php');

class MainController
{
    public function viewReturn()
    {
        $countries = $this->typeAction();
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

        echo json_encode($SubTypeResult->getDataFromDbSubType($_POST['code']));
    }

    public function prodAction()
    {
        $prodResult = new ProductsModel();

        echo json_encode($prodResult->getDataFromDbModels($_POST['lol']));
    }
}
