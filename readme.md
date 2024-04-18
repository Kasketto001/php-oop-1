# Usage of Production Class Functions in PHP

<img src="https://skillicons.dev/icons?i=php" />


This repository contains a PHP script (`index.php`) that demonstrates the usage of the `Production` class functions. The `Production` class represents various productions such as movies or TV series, with properties for title, language, and rating.

## Functions

The script uses the following functions of the `Production` class:

1. `__construct($title, $language, $rating)`: This is the constructor function of the `Production` class. It initializes a new production object with the provided title, language, and rating.

2. `getTitle()`: This function returns the title of the production object.

3. `getLanguage()`: This function returns the language of the production object.

4. `getRating()`: This function returns the rating of the production object.

## Usage

To use these functions:

1. Create an instance of the `Production` class by calling the constructor function and passing the title, language, and rating as parameters.

2. Use the `getTitle()`, `getLanguage()`, and `getRating()` functions to retrieve the details of the production object.

## Example

```php
$production1 = new Production("Film A", "Italian", 8);
$production2 = new Production("TV Series B", "English", 7);

echo "Production 1:\n";
echo "Title: " . $production1->getTitle() . "\n";
echo "Language: " . $production1->getLanguage() . "\n";
echo "Rating: " . $production1->getRating() . "\n";

echo "\n";

echo "Production 2:\n";
echo "Title: " . $production2->getTitle() . "\n";
echo "Language: " . $production2->getLanguage() . "\n";
echo "Rating: " . $production2->getRating() . "\n";