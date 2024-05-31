<?php
class Genre {
    
    private string $movie_genre;

    #---------------------------- Set & Get ---------------------------

    public function setGenre($_movie_genre){
        $this->movie_genre = $_movie_genre;
    }

    public function getGenre(){
        return $this->movie_genre;
    }
}


?>