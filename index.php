<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 16:04
 */
require "vendor/autoload.php";
$endpointAddress = @$_REQUEST['address'];

try {
    $controller = new App\Controller();
    if(!$endpointAddress){
        $connector = new \App\FileConnector("text.txt", new \App\JsonReader());
    } else {
        $connector = new \App\UrlConnector($endpointAddress, new \App\JsonReader());
    }

    $controller->setConnector($connector);
    $controller->setWriter(new \App\JsonWriter());
    
    $result = $controller->process();
    print $result;
} catch(Exception $e){
    //do something
}
