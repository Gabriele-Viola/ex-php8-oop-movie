<?php

$movies = [
    $matrix = new Movie('Matrix', 1999, 136, new Genre('sci-fi', 'action', 'distopic'), "USA"),
    $troy = new Movie("Troy", 2004, 162, new Genre('action', 'story'), "USA"),

];
$movies[0]->setCuriosity('Simbolo della società', 'alice nel paese delle meraviglie');
