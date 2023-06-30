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

    public function __construct($title, float $duration, ReleaseDate $releaseDate, string ...$genre ){

        self :: $movieCounter++;

        $this -> title = $title;
        $this -> genre = $genre;
        $this -> duration = number_format($duration, 2);
        $this -> releaseDate = $releaseDate;
    }

    public function getMovieDetails(){


        return $this -> genre . " " . $this -> duration . " " . $this -> releaseDate;
    }

}
$releaseDate1 = new ReleaseDate("2020", "10", "05");
$releaseDate2 = new ReleaseDate("2021", "01", "10");

$movie1 = new Movie("Festazza", 2.00, $releaseDate1, "Drammatico", "Comico");
$movie2 = new Movie("Il Dilemma", 1.30, $releaseDate2, "Comico");

echo "<span>" . var_dump($movie1->title) . "</span>";
echo "<br> <br>";
echo "<span>" . var_dump($movie1->genre) . "</span>";
echo "<br> <br>";
echo "<span>" . var_dump($movie1->duration) . "</span>";
echo "<br> <br>";
echo "<span>" . var_dump($movie1->releaseDate) . "</span>";
echo "<br> <br>";
echo "<br> <br>";
echo "<span>" . var_dump($movie2->title) . "</span>";
echo "<br> <br>";
echo "<span>" . var_dump($movie2->genre) . "</span>";
echo "<br> <br>";
echo "<span>" . var_dump($movie2->duration) . "</span>";
echo "<br> <br>";
echo "<span>" . var_dump($movie2->releaseDate) . "</span>";
echo "<br> <br>";
