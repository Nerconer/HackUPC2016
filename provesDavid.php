
<?php
	$apiKey = "ah229592831881725379481999349293";
	$country = "ES";
	$currency = "EUR";
	$locale = "es-ES";
	$originplace = "BCN-sky";
	$destinationplace = "PARI-sky";
	$outbounddate = "2016-02-21";












	$price_list = array();

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
	$location = $http_response_header[4] . '?apiKey=ah229592831881725379481999349293';
	$location = str_replace("Location: ", "", $location);
	//var_dump($location);
	$json = file_get_contents($location);
	$obj = json_decode($json);

	//print_r($obj->Itineraries[0]);	
	$Iti = $obj->Itineraries;
	
	foreach ($Iti as $priOpt) {
		foreach ($priOpt as $o) {
				//print_r($o);
			foreach ($o as $a) {
						//print_r($a);
						$id = $a->Agents[0];
						$price = $a->Price;
						//print_r($id);
						//print_r($price);
						$price_list[$id] = $price;
					}		
			}
	}
	$price_list = array_filter($price_list);
	//var_dump($price_list);



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