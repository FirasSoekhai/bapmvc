<?php
// Kopieer dit bestand naar config.php met je eigen gegevens
// config.php wordt niet naar Github gestuurd, wel zo veilig.
// Zet dus NOOIT in dit bestand je geheime gegevens, deze dient alleen als voorbeeld

$config = [
	'DB'       => [
		'HOSTNAME' => '127.0.0.1',
		'DATABASE' => '',
		'USER'     => 'root',
		'PASSWORD' => ''
	],
	'BASE_URL' => '',  // Zet hier het pad naar de public map in, vanaf http://localhost, anders werken je routes niet!
	'ROOT'     => dirname( dirname( __DIR__ ) ),
	'PRIVATE'  => dirname( __DIR__ ),
	'WEBROOT'  => dirname( dirname( __DIR__ ) ) . '/public'
];

return $config;
