<?php

$container['couchdb'] = function ($c) {
	$couchdb = [];
	$couchdb['handle'] = new \GuzzleHttp\Client([
		"base_uri" => $c['settings']['couchdb']['url'],
	]);
	return $couchdb;
};

$container['view'] = new \Slim\Views\PhpRenderer("../templates/");
