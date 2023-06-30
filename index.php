<?php 

class Movie {

    public static $movieCounter = 0;

    public $title;
    public $duration;
    public $releaseDate;

    public function __construct($title, $duration, $releaseDate){

        self :: $movieCounter++;

        $this -> title = $title;
        $this -> duration = $duration;
        $this -> releaseDate = $releaseDate;
    }

    public function getMovieDetails(){


        return $this -> duration . " " . $this -> releaseDate;
    }


}