<?php

class searchcontrol{

    function showsearchcontrol($text1){
        require_once './model/search_itemsModel.php';
        require_once './view/search_itemsView.php';
        $model = new SRM();
        $view = new SRV();

        $rows = $model->getOneUser($text1);
        $view->displaySearchUser($rows,$text1);
    }

}

?>
