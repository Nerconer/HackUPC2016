<?php  

	include 'import.php';
	$cities = $_GET['cities'];
	$currency_val = $_GET['radios'];

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
			foreach ($hackathons as $hackathon) {
				$place = $hackathon->place;
				$place = split(',', $place);
				$country = $place[1];
				$place = $place[0];
				//$code = getCode($place, $country);

				$result = file_get_contents("http://partners.api.skyscanner.net/apiservices/autosuggest/v1.0/ES/EUR/en-EN/?query=".$place."&apiKey=ah229592831881725379481999349293");
				$result = json_decode($result);
				//var_dump($result);
				$code = $result->Places[0]->PlaceId;
				if($code === NULL) {
					$result1 = file_get_contents("http://partners.api.skyscanner.net/apiservices/autosuggest/v1.0/ES/EUR/en-EN/?query=".$country."&apiKey=ah229592831881725379481999349293");
					$code = $result1->Places[0]->PlaceId;
				}


				$code_cities = file_get_contents("http://partners.api.skyscanner.net/apiservices/autosuggest/v1.0/ES/EUR/en-EN/?query=".$cities."&apiKey=ah229592831881725379481999349293");
				$code_cities = json_decode($code_cities);
				//echo $cities,"<br/>";
				//echo "CITIEEEES: ",$code_cities,"<br/>";
					$code_cities = $code_cities->Places[0]->PlaceId;
				//echo $code_cities->Places,"<br/>";
				//echo "<pre>" . print_r($code_cities,true) . "</pre>";



				$link = 'infoHack.php?country=ES&currency='.$currency_val.'&locale=en-EN&originplace='.$code_cities.'&destinationplace='.$code.'&outbounddate=2016-02-21';

		?>
			<div class="hackathon">
			
				<div class="right">
					<img src="<?php echo $hackathon->logo; ?>"><br/>
					<a class="btn-primary" href="<?php echo $link; ?>">Find Prices!'</a>
				</div>

				<h3><?php echo $hackathon->name; ?></h3>

				<ul>
					<li><?php echo $hackathon->info; ?></li>
					<li><a href=""><?php echo $hackathon->link; ?></a></li>
				</ul>


			</div>

			<?php } ?>
	</div>
</body>
</html>