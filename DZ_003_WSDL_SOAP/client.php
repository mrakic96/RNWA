<?php

header('Content-Type: text/plain');

try{
	ini_set('soap.wsdl_cache_enabled',0);
	ini_set('soap.wsdl_cache_ttl',0);

	$value = $_POST['value'];
	if($_POST['valuta'] === "uEUR"){
		$sClient = new SoapClient('konverzijaBAMToEUR.wsdl');
		$response = $sClient->konverzijaBAMToEUR($value);
	}
	else{
		$sClient = new SoapClient('konverzijaEURToBAM.wsdl');
		$response = $sClient->konverzijaEURToBAM($value);
	}
	
	var_dump($response);

} catch(SoapFault $e){
  var_dump($e);
  echo $e;
}

?>