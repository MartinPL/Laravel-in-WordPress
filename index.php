<?php

use Illuminate\Http\Request;

$response = $kernel->handle(
	$request = Request::capture()
)->send();

$kernel->terminate($request, $response);
