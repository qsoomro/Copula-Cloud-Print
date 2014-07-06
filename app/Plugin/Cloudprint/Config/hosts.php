<?php

$config['Copula']['cloudprint']['Auth'] = array(
	'authMethod' => 'OAuthV2',
	'scheme' => 'https',
	'authorize' => 'o/oauth2/auth',
	'access' => 'o/oauth2/token',
	'host' => 'accounts.google.com',
	'scope' => 'https://www.googleapis.com/auth/cloudprint',
	'callback' => ''
);

$config['Copula']['cloudprint']['Api'] = array(
	'host' => 'www.google.com/cloudprint',
	'authMethod' => 'OAuthV2'
);
?>