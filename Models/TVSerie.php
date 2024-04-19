<?php

class TVSerie {
    private $title;
    private $language;
    private $rating;
    private $genres;
    private $numSeasons;

    public function __construct($title, $language, $rating, $genres, $numSeasons) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = max(1, min($rating, 10));
        $this->genres = $genres;
        $this->numSeasons = $numSeasons;
    }

    public function getNumSeasons() {
        return $this->numSeasons;
    }
}

