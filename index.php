<?php 

class ReleaseDate {

    public $year;
    public $month;
    public $day;

    public function __construct($year, $month, $day){
        
        $this -> year = $year;
        $this -> month = $month;
        $this -> day = $day;

    }

}

class Movie {

    public static $movieCounter = 0;

    public $title;
    public $genre;
    public $duration;
    public $releaseDate;

    public function __construct($title, $duration, ReleaseDate $releaseDate, string ...$genre ){

        self :: $movieCounter++;

        $this -> title = $title;
        $this -> genre = $genre;
        $this -> duration = $duration;
        $this -> releaseDate = $releaseDate;
    }
    public function getGenreStr(){
        $res = "";
        for ($i=0; $i < count ($this -> genre) ; $i++) { 
            $genre = $this -> genre[$i];
            $res .=$genre . ", ";
        }
        return $res;
    }


    public function getMovieDetails(){


        return 
        $this -> title . "<br>" . 
        $this -> getGenreStr() . "<br>" . 
        $this -> duration . "m<br>" . 
        $this -> releaseDate -> year . "/" . $this -> releaseDate -> month . "/" . $this -> releaseDate -> day;
    }



    public static function getCounter() {
        

        return self :: $movieCounter;
    }

}
$releaseDate1 = new ReleaseDate("2020", "10", "05");
$releaseDate2 = new ReleaseDate("2021", "01", "10");

$movie1 = new Movie("Festazza", 120, $releaseDate1, "Drammatico", "Comico");
$movie2 = new Movie("Il Dilemma", 90, $releaseDate2, "Comico");
echo $movie1 -> getMovieDetails();
echo "<br> <br>";
echo $movie2 -> getMovieDetails();