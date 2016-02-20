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
		?>
			<div class="hackathon">
			
				<div class="right">
					<img src="<?php echo $hackathon->logo; ?>"><br/>
					<a class="btn-primary" href="infoHack.php?country=ES&currency=EUR&locale=es-ES&originplace=BCN-sky&destinationplace=PARI-sky&outbounddate=2016-02-21">Find Prices!</a>
				</div>

				<h3><?php echo $hackathon->name; ?></h3>

				<ul>
					<li><?php echo $hackathon->info; ?></li>
					<li><a href=""><?php echo $hackathon->link; ?></a></li>
				</ul>


			</div>

			<?php }?>
	</div>
</body>
</html>