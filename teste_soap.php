<?php
print_r('<pre>');

$caminhoWsdl = 'https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL=1';

$cliente = new SoapClient($caminhoWsdl);

//print_r($cliente);

// define os parâmetros de entrada 
$addIntegerData = new stdClass();

$addIntegerData->Arg1 = 1;
$addIntegerData->Arg2 = 11;

$divideIntegerData = new stdClass();

$divideIntegerData->Arg1 = 20;
$divideIntegerData->Arg2 = 2;


$findPersonData = new stdClass();
$findPersonData->id = 1;

try {
	print_r("-------------------------------------------");
	print_r("<br>-- Resultado chamada função 'AddInteger' --<br>");
	print_r("-------------------------------------------<br><br>");

	print_r($cliente->AddInteger($addIntegerData));

	print_r("<br><br>----------------------------------------------");
	print_r("<br>-- Resultado chamada função 'DivideInteger' --<br>");
	print_r("----------------------------------------------<br><br>");
	print_r($cliente->DivideInteger($divideIntegerData));
	
	print_r("<br><br>-------------------------------------------");
	print_r("<br>-- Resultado chamada função 'FindPerson' --<br>");
	print_r("-------------------------------------------<br><br>");
	print_r($cliente->FindPerson($findPersonData));
	
} catch (SoapFault $e) {
	print_r('<b>Erro: </b>');
	print_r($e);
}

print_r('</pre>');
