<?php 
ini_set('display_errors',0);
 ?>
<html>
	<head>
		<meta charset ="utf-8">
		<title>HackaTravel</title>
		<link type="text/css" href="style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
	</head>
	<body ng-controller= "controlador">
		<h1 id = "pagTitulo">HackaTravel</h1>
		
		<form class="form-horizontal" action="events.php" method="GET">
			<fieldset class = "col-md-8">
				<legend class="col-md-4 control-label">Select your country of origin </legend>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="selectbasic"></label>
				  <div class="col-md-4">
					<select id="selectbasic" name="cities" class="form-control">					 
						<option value="BRUS-sky">Brussels</option>
						<option value="Sofia-sky">Sofia</option>
						<option value="Prague-sky">Prague</option>
						<option value="Copenhagen-sky">Copenhagen</option>
						<option value="Helsinki-sky">Helsinki</option>
						<option value="Paris-sky">Paris</option>
						<option value="Berlin-sky">Berlin</option>
						<option value="Athens-sky">Athens</option>
						<option value="Budapest-sky">Budapest</option>
						<option value="Dublin-sky">Dublin</option>
						<option value="Rome-sky">Rome</option>
						<option value="Luxembourg-sky">Luxembourg</option>
						<option value="Monaco-sky">Monaco</option>
						<option value="Amsterdam-sky">Amsterdam</option>
						<option value="Oslo-sky">Oslo</option>
						<option value="Lisbon-sky">Lisbon</option>
						<option value="Bucharest-sky">Bucharest</option>
						<option value="Moscow-sky">Moscow</option>
						<option value="Belgrade-sky">Belgrade</option>
						<option value="Bratislava-sky">Bratislava</option>
						<option value="Ljubljana-sky">Ljubljana</option>
						<option value="Madrid-sky">Madrid</option>
						<option value="Stockholm-sky">Stockholm</option>
						<option value="Bern-sky">Bern</option>
						<option value="Ankara-sky">Ankara</option>
						<option value="Kyiv-sky">Kyiv</option>
						<option value="London-sky">London</option>
						<option value="Vatican city-sky">Vatican City</option>
					</select>
				  </div>
				</div>
				
				<legend class="col-md-4 control-label">Select the type of currency </legend>

				<div class="form-group" name="currency_val">
				  <label class="col-md-4 control-label" for="radios"></label>
				  <div class="col-md-4">
				  <div class="radio">
					<label for="radios-0">
					  <input type="radio"name="radios" value="EUR" checked="checked">Euro</label>
					</div>
				  <div class="radio">
					<label for="radios-1">
					  <input type="radio" name="radios" value="GBP">Pounds</label>
					</div>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-md-4 control-label" for="singlebutton"></label>
				  <div class="col-md-4">
					<button name="singlebutton" class="btn-primary">search</button>
				  </div>
				</div>
			</fieldset>
		</form>
	</body>
</html>
