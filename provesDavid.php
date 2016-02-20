
<?php
	$apiKey = "ah229592831881725379481999349293";
	$country = "ES";
	$currency = "EUR";
	$locale = "es-ES";
	$originplace = "BCN-sky";
	$destinationplace = "PARI-sky";
	$outbounddate = "2016-02-21";














	$url ="http://partners.api.skyscanner.net/apiservices/pricing/v1.0";

	$data = array(	'apiKey' 			=> 'ah229592831881725379481999349293', 
					'country' 			=> 	'ES',
					'currency' 			=> 	'EUR',
					'locale' 			=> 	'es-ES',
					'originplace' 		=> 	'BCN-sky',
					'destinationplace' 	=> 	'PARI-sky',
					'outbounddate' 		=>	'2016-02-21',
					);

	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'POST',
	        'content' => http_build_query($data),
	    ),
	);

	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	var_dump($result);
	var_dump($http_response_header);
	var_dump($http_response_header[4]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Proves APIs</title>
</head>
<body>
	<div id="1">

	</div>
</body>
</html>