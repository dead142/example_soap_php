<?php

namespace app\controllers;


use app\models\Demo;
use yii\helpers\VarDumper;
use yii\web\Controller;

class DemoController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return Demo::server();
    }

    public function actionClient()
    {
        $client = new \SoapClient(null, array(
            'location' =>
                "http://b/auto/web/index.php?r=demo/index",
            'uri' => "http://b/auto/web/index.php?r=demo/index",
            'trace' => 1));
        $return = $client->__soapCall("Hello", []);
        var_dump($return);
    }
}