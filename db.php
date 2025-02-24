<?php

$movies = [
    $matrix = new Movie('Matrix', 1999, 136, new Genre('sci-fi', 'action', 'distopic'), "USA"),
    $troy = new Movie("Troy", 2004, 162, new Genre('action', 'story'), "USA"),
    $titanic = new Movie("Titanic", 1997, 195, new Genre('romantic', 'historical'), "USA"),

];
$movies[0]->setCuriosity('Simbolo della società', 'alice nel paese delle meraviglie');
$movies[2]->setCuriosity("Campione D'incassi", "jack non ci stava sulla porta");
