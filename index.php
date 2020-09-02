<?php  

// Oefening 1

$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

print_r($klas);



Oefening 2

$klas = array("Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck");

echo count($klas);

for($i=0; $i < count($klas); $i++){
  echo $klas[$i], PHP_EOL;
}



Opdracht 3

$klas = array("Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck");

foreach ($klas as $naam) {
	echo $naam , PHP_EOL;
}



Combinatie Opdracht

$bucket_list= [];

$hoeveel_activiteiten = readline()("Hoeveel_activiteiten wil je toevoegen aan je bucketlist?");

?>