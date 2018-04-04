<?php

/**
 * SOAP non-WSDL client-side initial code
 * 
 * @package			PhpFiddle
 * @link			http://phpfiddle.org
 * @since			2012
*/

//Using PHPFiddle API to get code URL from code id, for example,
$location = "http://main.xfiddle.com/" . pf_file("ex4d-hucd");

//following code can be changed to meet your needs
try {
	
	$options = array ( 	"location" => $location,
						"uri" => "mysoap",			//with same uri value string in soap server
						"style" => SOAP_RPC,
						"use" => SOAP_ENCODED
					);

	$soap = new SoapClient(null, $options);

	// call function(s) defined in soap server
	echo $soap -> Hello("World"), "<br />";
	echo $soap -> Add(67, 39), "<br />";
	
/**
//	correspond to server-side code
	echo $soap -> my_hello("World"), "<br />";
	echo $soap -> my_add(67, 39), "<br />";
*/   

} catch (Exception $e)
{
	echo print_r($e -> getMessage(), true);
}


?>
