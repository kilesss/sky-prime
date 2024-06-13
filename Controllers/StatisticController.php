<?php

namespace Controllers;
include_once 'Models/SettlementsModel.php';
include_once 'Validators/StatisticValidator.php';
use Controllers\Models\SettlementsModel;
use Controllers\Validators\StatisticValidator;

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
        $errors = [];
        if (count($_POST) > 0){
            $validate = new StatisticValidator();
            $validate->validateRequest($_POST);
            if ($validate->validationStatus() == true){
                $requestedData = $model->getRequestedData($postData);
            }else{
                $this->$validate->getError();
            }
        }
        $dataFilters = $model->getDataForFilters();
        view('statistic',[
            'dataFilters' => $dataFilters,
            'requestedData' => json_encode($requestedData,JSON_UNESCAPED_UNICODE),
            'errors' => $errors,
            'postData' => $postData
        ]);
    }

}