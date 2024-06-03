<?php
class Genre {
    
    private string $movie_genre;

    #---------------------------- Set & Get ---------------------------
    public function __construct($_genre_name)
    {
        $this->movie_genre=$_genre_name;
    }

    public function getGenre(){
        return $this->movie_genre;
    }
}


?>