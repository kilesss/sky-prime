<?php

namespace Controllers;
include_once 'Models/SettlementsModel.php';
use Controllers\Models\SettlementsModel;

/**
 *
 */
class StatisticController
{

    /**
     * @return void
     */
    public function view()
    {
        $model = new SettlementsModel();
        $requestedData = [];
        $postData = $_POST;
        if (count($_POST) > 0){
             $requestedData = $model->getRequestedData($postData);
        }
        $dataFilters = $model->getDataForFilters();
        view('statistic',['dataFilters' => $dataFilters, 'requestedData' => json_encode($requestedData,JSON_UNESCAPED_UNICODE)]);
    }

}