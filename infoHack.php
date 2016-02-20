<?php 

	$country = $_GET['country'];
	echo $country;
	echo "<br/>";

	$currency = $_GET['currency'];
	echo $currency;
	echo "<br/>";

	$locale = $_GET['locale'];
	echo $locale,"<br/>";

	$originplace = $_GET['originplace'];
	echo $originplace,"<br/>";

	$destinationplace = $_GET['destinationplace'];
	echo $destinationplace,"<br/>";

	$outbounddate = $_GET['outbounddate'];
	echo $outbounddate,"<br/>";


	$url ="http://partners.api.skyscanner.net/apiservices/pricing/v1.0";

	$data = array(	'apiKey' 			=> 'ah229592831881725379481999349293', 
					'country' 			=> 	$country,
					'currency' 			=> 	$currency,
					'locale' 			=> 	$locale,
					'originplace' 		=> 	$originplace,
					'destinationplace' 	=> 	$destinationplace,
					'outbounddate' 		=>	$outbounddate,
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


	// VARIABLES
	$price_list = array();
	//var_dump($obj);
	$currency = $obj->Query->Currency;

	$Iti = $obj->Itineraries;
	
	foreach ($Iti as $priOpt) {
		foreach ($priOpt as $o) {
			foreach ($o as $a) {
						$id = $a->Agents[0];
						$price = $a->Price;
						$price_list[$id] = $price . ' ' .$currency;
					}		
			}
	}
	$price_list = array_filter($price_list); // delete null values (trash)

	foreach ($obj->Agents as $agent ) {
		//var_dump($agent->Id);
		$idAgent = $agent->Id;
		$nameAgent = $agent->Name;
		if (array_key_exists($idAgent, $price_list)) {
			$price_list[$nameAgent] = $price_list[$idAgent];
			unset($price_list[$idAgent]);
		}

	}

	echo "<pre>" . print_r($price_list,true) . "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<div id="content">

		<?php 
			//foreach ($ as $ ) {
				
			//} ?>

		
	</div>
</body>
</html>