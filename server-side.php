<?php

/**
 * SOAP non-WSDL server-side initial code
 *
 * @package			PhpFiddle
 * @link			http://phpfiddle.org
 * @since			2012
*/

// for setClass
class MyService
{
	// define public function(s) to be called from client-side code
	public function Hello($name)
	{
		return  "Hello " . $name . " !";
	}
	
	public function Add ($x, $y)
	{
		return $x + $y;
	}
	
}

/**
// for addFunction
function my_hello($name)
{
	return  "Hello " . $name . " !";
}

function my_add($x, $y)
{
	return $x + $y;
}
*/

//uri is a string to indentify SOAP service
$options = array("uri" => "mysoap");

$server = new SoapServer(null, $options);

$server -> setClass("MyService");

/**
// addFunction and setClass can not be put together
$server->addFunction("my_hello");
$server->addFunction("my_add");
*/

$server -> handle();


?>
