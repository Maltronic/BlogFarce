<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

if (isset($_SERVER['HTTP_CLIENT_IP']) || isset($_SERVER['HTTP_X_FORWARDED_FOR']) || $_SERVER['REMOTE_ADDR'] != '127.0.0.1') {
    header('HTTP/1.0 403 Forbidden');
    exit('Access denied');
}

$loader = require_once __DIR__ . '/../app/bootstrap.php.cache';
Debug::enable();
require_once __DIR__ . '/../app/AppKernal.php';

$kernel = new AppKernel('test', true);
$kernel->localClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);