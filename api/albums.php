<?php 

// leggo i dati dal file albums.json
$albums = file_get_contents(__DIR__ . "/../db/albums.json");

// I dati sono già in formato json, perciò non ho bisogono di convertirli con la funzione json_encode() 

// Specifico il tipo di contenuto
header ('Content-Type: application/json');

// Stampo i dati, che poi axios leggerà 

echo $albums;

?>