<?php

class Production {
    private $title;
    private $language;
    private $rating;
    private $genres;

    public function __construct($title, $language, $rating, $genres) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = max(1, min($rating, 10));
        $this->genres = $genres;
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

    public function getGenres() {
        return $this->genres;
    }
}

