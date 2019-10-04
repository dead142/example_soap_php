<?php
/**
 * Корневая диретория проекта http://b/soap/no_wsdl
 * @var $server SoapServer
 */
/**
 * @return string
 */
function Hello(){
    return 'привет, я работаю';
}


$server = new SoapServer(null, array('uri' => "http://b/soap/no_wsdl/server.php"));
$server->addFunction('Hello');
$server->handle();

