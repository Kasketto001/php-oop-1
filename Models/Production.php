<?php

class Production {
    private $title;
    private $language;
    private $rating;

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

?>
