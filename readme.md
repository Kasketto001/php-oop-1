# Usage of Production Class Functions in PHP


## LANGUAGES & FRAMEWORKS
<img src="https://skillicons.dev/icons?i=php,bootstrap,html" />


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
```

# BONUS 1 COMMIT EXPLAINS

## Functionalities

This project aims to display a list of productions, such as movies or TV series, along with their titles, languages, and ratings. Here's how it works:

1. **Data Management**: The `db.php` file contains an array of `Production` objects, each representing a production with its title, language, and rating.

2. **Production Class**: The `Production` class, defined in `Models/Production.php`, encapsulates the properties and behaviors of a production. It includes a constructor to initialize the production with its title, language, and rating, as well as getter methods to retrieve these properties.

3. **Displaying Productions**: The `index.php` file utilizes the `Production` class and the data from `db.php` to dynamically generate HTML content displaying the list of productions. It loops through the productions array and prints each production's details using Bootstrap for styling.

4. **Bootstrap Styling**: Bootstrap CSS (v5.3.2) is used to enhance the visual appearance of the production list, providing a clean and responsive layout.


