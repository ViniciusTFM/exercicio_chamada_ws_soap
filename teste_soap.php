<?php
	print_r('<pre>');

	$caminhoWsdl = 'http://www.dneonline.com/calculator.asmx?wsdl';
	
	$cliente = new SoapClient($caminhoWsdl, array('trace' => 1));
	
	// define os parâmetros de entrada 
	$data = new stdClass();

	$data->intA			= 1;
	$data->intB 		= 1;
	

	try {

		$result = $cliente->Add($data);
		
		print_r($result);
	
	} catch(SoapFault $e ) {

		print_r('<b>Erro: </b>');
		print_r($e);
	}

	print_r('</pre>');
