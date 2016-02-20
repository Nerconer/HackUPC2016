
<?php 
	$url ="http://partners.api.skyscanner.net/apiservices/pricing/v1.0";

	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'header'  => "Accept header: ‘application/json\r\n",
	        'method'  => 'POST',
	    ),
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	var_dump($result);












	$apiKey="ah229592831881725379481999349293";
	$session = $_GET["session"];
	$apiSessionUrl ='http://partners.api.skyscanner.net/apiservices/pricing/v1.0/'.$session.'/booking';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Proves APIs</title>
</head>
<body>
	<div id="1">
		<p>Holas</p>
		<?php echo "hellooo"; ?>
	</div>
</body>
</html>