<?php

namespace app\models;
class Demo
{
    public function hello()
    {
        return 'привет, я работаю';
    }

    public static function server()
    {
        $server = new \SoapServer(null, array('uri' => "http://b/auto/web/index.php?r=demo/index"));
        $server->setObject(new Demo());
        ob_start();
        $server->handle();
        $result = ob_get_contents();
        ob_end_clean();
        return $result;

    }

}