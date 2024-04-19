<?php

include_once "Models/Genre.php";
include_once "Models/Production.php";
include_once "Models/Movie.php";
include_once "Models/TVSerie.php";


$action = new Genre("Action", "Exciting and fast-paced");
$comedy = new Genre("Comedy", "Humorous and light-hearted");
$drama = new Genre("Drama", "Serious and emotional");
$crime = new Genre("Crime", "Involves criminal activities and investigations");
$romance = new Genre("Romance", "Focuses on romantic relationships");


$shawshankRedemption = new Movie("The Shawshank Redemption", "English", 9.3, [$drama], "$58.5 million", "142 minutes");
$godfather = new Movie("The Godfather", "English", 9.2, [$drama, $crime], "$245 million", "175 minutes");
$darkKnight = new Movie("The Dark Knight", "English", 9, [$action, $drama, $crime], "$1.005 billion", "152 minutes");
$inception = new Movie("Inception", "English", 8.8, [$action, $adventure, $sciFi], "$829.9 million", "148 minutes");


$breakingBad = new TVSerie("Breaking Bad", "English", 9.5, [$drama, $crime], 5);
$friends = new TVSerie("Friends", "English", 8.9, [$comedy, $romance], 10);
$strangerThings = new TVSerie("Stranger Things", "English", 8.7, [$drama, $fantasy, $horror], 4);
$gameOfThrones = new TVSerie("Game of Thrones", "English", 9.3, [$action, $adventure, $drama], 8);


$productions = [
    new Production("The Shawshank Redemption", "English", 9.3, [$drama]),
    new Production("The Godfather", "English", 9.2, [$drama, $crime]),
    new Production("The Dark Knight", "English", 9, [$action, $drama, $crime]),
    new Production("Inception", "English", 8.8, [$action, $adventure, $sciFi]),
    new Production("Breaking Bad", "English", 9.5, [$drama, $crime]),
    new Production("Friends", "English", 8.9, [$comedy, $romance]),
    new Production("Stranger Things", "English", 8.7, [$drama, $fantasy, $horror]),
    new Production("Game of Thrones", "English", 9.3, [$action, $adventure, $drama]),

];

