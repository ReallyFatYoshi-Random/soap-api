<?php

use SoapApi\Library\BookCase;

$wsdlGenerator = new PHP2WSDL\PHPClass2WSDL(BookCase::class, 'http://localhost:3000');
$wsdlGenerator->generateWSDL(true);
$wsdlGenerator->save(env('WSDL_FILE', 'SoapAPI.wsdl'));
