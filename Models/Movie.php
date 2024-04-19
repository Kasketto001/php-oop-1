<?php

class Movie {
    private $title;
    private $language;
    private $rating;
    private $genres;
    private $profits;
    private $duration;

    public function __construct($title, $language, $rating, $genres, $profits, $duration) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = max(1, min($rating, 10));
        $this->genres = $genres;
        $this->profits = $profits;
        $this->duration = $duration;
    }


    public function getProfits() {
        return $this->profits;
    }

    public function getDuration() {
        return $this->duration;
    }
}


