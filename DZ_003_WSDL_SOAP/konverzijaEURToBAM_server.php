<?php

if(!extension_loaded("soap")){
  dl("php_soap.dll");
}


ini_set("soap.wsdl_cache_enabled","0");

$server = new SoapServer("konverzijaEURToBAM.wsdl");


function konverzijaEURToBAM($yourValue){
  return "Konverzija eura u marke: " . $yourValue * 1.96 . " BAM";
}

$server->AddFunction("konverzijaEURToBAM");
$server->handle();
?>