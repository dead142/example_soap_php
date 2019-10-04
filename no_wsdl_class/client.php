<?php
/**
 * @var $client SoapClient
 */
$client = new SoapClient(null, array(
    'location' =>
        "http://b/soap/no_wsdl_class/server.php",
    'uri'      => "http://b/soap/no_wsdl_class",
    'trace'    => 1 ));


$return = $client->__soapCall("Hello",[]);
var_dump($return);