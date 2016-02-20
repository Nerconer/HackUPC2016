<?php 
ini_set('display_errors',0);


 ?>
<html ng-app = "AppTravel">
	<head>
		<meta charset ="utf-8">
		<title>HackaTravel</title>
		<link type="text/css" href="style.css" rel="stylesheet">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.1/angular.min.js"></script>
		<!--<link href="css/bootstrap-form-helpers.min.css" rel="stylesheet">
		<script src="js/bootstrap-formhelpers.min.js"></script>-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
			integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<?php include 'import.php';?>
		<?php $dados = $hackathons;
			echo $hackathons;
		?>
	<script>
		
		
		var App = angular.module('AppTravel',[]);
		App.controller('controlador',function($scope){
			$scope.countries=[
				{"name": "Portugal", "populacao": 11000},
				{"name": "espanha", "populacao": 10001},
				{"name": "china", "populacao": 1}
			];
		});
	</script>
	</head>
	<body ng-controller = "controlador">
		<h1 id = "pagTitulo">HackaTravel</h1>
		
		<form class="form-horizontal">
			<fieldset class = "col-md-8">
				<legend class="col-md-4 control-label">Select your country of origin </legend>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="selectbasic"></label>
				  <div class="col-md-4">
					<select id="selectbasic" name="selectbasic" class="form-control">					 
						<option value="AL">Albania</option>
						<option value="AD">Andorra</option>
						<option value="AM">Armenia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaijan</option>
						<option value="BY">Belarus</option>
						<option value="BE">Belgium</option>
						<option value="BM">Bermuda</option>
						<option value="BA">Bosnia and Herzegovina</option>
						<option value="BG">Bulgaria</option>
						<option value="HR">Croatia</option>
						<option value="CZ">Czech Republic</option>
						<option value="DK">Denmark</option>
						<option value="DO">Dominican Republic</option>
						<option value="EE">Estonia</option>
						<option value="FI">Finland</option>
						<option value="FR">France</option>
						<option value="GE">Georgia</option>
						<option value="DE">Germany</option>
						<option value="GR">Greece</option>
						<option value="HU">Hungary</option>
						<option value="IE">Ireland</option>
						<option value="IT">Italy</option>
						<option value="LV">Latvia</option>
						<option value="LT">Lithuania</option>
						<option value="LU">Luxembourg</option>
						<option value="MT">Malta</option>
						<option value="MS">Montserrat</option>
						<option value="NL">Netherlands</option>
						<option value="NZ">New Zealand</option>
						<option value="NO">Norway</option>
						<option value="PL">Poland</option>
						<option value="PT">Portugal</option>
						<option value="SK">Slovakia</option>
						<option value="SI">Slovenia</option>
						<option value="ES">Spain</option>
						<option value="SZ">Swaziland</option>
						<option value="SE">Sweden</option>
						<option value="CH">Switzerland</option>
						<option value="TN">Tunisia</option>
						<option value="TR">Turkey</option>
					</select>
				  </div>
				</div>
				
				<legend class="col-md-4 control-label">Select the type of currency </legend>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="radios"></label>
				  <div class="col-md-4">
				  <div class="radio">
					<label for="radios-0">
					  <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
					  Euro
					</label>
					</div>
				  <div class="radio">
					<label for="radios-1">
					  <input type="radio" name="radios" id="radios-1" value="2">
					  Dollar
					</label>
					</div>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-md-4 control-label" for="singlebutton"></label>
				  <div class="col-md-4">
					<button id="singlebutton" name="singlebutton" class="btn btn-success">search</button>
				  </div>
				</div>
			</fieldset>
		</form>
	
	</body>
</html>
