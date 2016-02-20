<?php

$string = file_get_contents("https://api.import.io/store/connector/a2218524-3758-4e44-83b1-7c2b96aba10f/_query?input=webpage/url:https%3A%2F%2Fmlh.io%2Fseasons%2Ff2014%2Fevents&&_apikey=895e8fa625764feb9ed6620383b73f289ddfc73c1c14446655c8ff64bd10d29b28e6cd7d60ec1e4803043157f66056ae904c157484cbaacd35e4633e6032f0854ea2299d76d5a3f2489bc1ddca8f910f");
$json_a = json_decode($string, true);
//var_dump($json_a);

$hackathons = array();

foreach ($json_a as $hackathon) {
	//echo "<pre>" . print_r($hackathon,true) . "</pre>";
	//var_dump($hackathon);
	foreach ($hackathon as $hack) {
		//var_dump($hack);
		$indivHack = new stdClass();
		$indivHack->name = $hack["wrap_image/_alt"];
		$indivHack->startingDay = $hack["inner_value_2_numbers"][0];
		$indivHack->info = $hack["eventwrapper_link/_text"];
		$indivHack->link = $hack["eventwrapper_link"];
		$indivHack->logo = $hack["eventwrapper_images"][1];

		//echo "<pre>" . print_r($hack,true) . "</pre>";
		//echo "<pre>" . print_r($indivHack,true) . "</pre>";
		
		if($indivHack->name !== NULL)
			if($indivHack->name != '_') array_push($hackathons, $indivHack);
		
	}
}
$hackathons = array_filter($hackathons);
echo "<pre>" . print_r($hackathons,true) . "</pre>";
?>