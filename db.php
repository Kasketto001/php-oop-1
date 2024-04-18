<?php 

// Include Production class, its constructor, and its functions 🛠️
include_once "./Models/Genre.php";
include_once "./Models/Production.php";



$genres = [
    new Genre("Action", "Exciting and fast-paced"),
    new Genre("Comedy", "Humorous and light-hearted"),
    new Genre("Drama", "Serious and emotional"),

];

$productions = [
    new Production("Film A", "Italian", 8, [$genres[0], $genres[2]]),
    new Production("Serie TV B", "English", 7, [$genres[1]]),
    new Production("Movie C", "Spanish", 9, [$genres[0], $genres[2]]),

];

