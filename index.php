<?php

class Production {
    public $title;
    public $language;
    public $rating;

    public function __construct($title, $language, $rating) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = max(1, min($rating, 10));
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getRating() {
        return $this->rating;
    }
}

$production1 = new Production("Film A", "Italiano", 8);
$production2 = new Production("Serie TV B", "Inglese", 7);

echo "Produzione 1:\n";
echo "Titolo: " . $production1->getTitle() . "\n";
echo "Lingua: " . $production1->getLanguage() . "\n";
echo "Voto: " . $production1->getRating() . "\n";

echo "<br>";

echo "Produzione 2:\n";
echo "Titolo: " . $production2->getTitle() . "\n";
echo "Lingua: " . $production2->getLanguage() . "\n";
echo "Voto: " . $production2->getRating() . "\n";

?>
