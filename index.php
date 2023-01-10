<?php
class Movie {
    public $title;
    public $genre;
    public $year;
    public $vote;

    public function __construct($title, $genre, $year, $vote)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->setYear($year);
        $this->vote = $vote;
    }

    public function setYear($year) {
        if (is_integer($year) && $year >= 0) {
            $this->year = $year;
        }
        return $year;
    }
}

$fastAndFurious = new Movie('Fast & Furious 7', 'Action', 2020, '5 star');
var_dump($fastAndFurious);

$laPimpa = new Movie('La pimpa', 'Cartoon', 2012, '1 star');
var_dump($laPimpa);