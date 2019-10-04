<?php
/**
 * Корневая диретория проекта http://b/soap/no_wsdl
 * @var $server SoapServer
 */
/**
 * @return string
 */
Class Soap {
    public function hello(){
        return 'привет, я работаю';
    }
    public function index(){
        $server = new SoapServer(null, array('uri' => "http://b/soap/no_wsdl_class/server.php"));
        $server->setClass('Soap');
        $server->handle();
    }
}

$soapServer = new Soap();
$soapServer->index();






