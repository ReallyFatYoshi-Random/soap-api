<?php

declare(strict_types=1);

error_reporting(E_ALL);

ini_set('display_errors', 1);
ini_set('soap.wsdl_cache_enabled', 0);

use SoapApi\Library\BookCase;

require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/wsdl.php';

/**
 * Loads environment variables in.
 */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->safeLoad();

$soapServer = new SoapServer(
    env('WSDL_FILE', 'SoapAPI.wsdl'), 
    [
        'uri' => 'http://localhost:3000',
        'soap_version'=> SOAP_1_1, 
        'trace' => true,
    ]
);

$soapServer->setClass(BookCase::class);
$soapServer->handle();
