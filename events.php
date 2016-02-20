<?php  

	include 'import.php';
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




				//echo "<pre>" . print_r($result,true) . "</pre>";
				$link = 'infoHack.php?country=ES&currency=EUR&locale=es-ES&originplace=BCN-sky&destinationplace='.$code.'&outbounddate=2016-02-21';

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