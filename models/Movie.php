<?php
class Movie {
    public string $movie_name;
    public int $movie_budget;
    public string $movie_release_date;
    public Genre $movie_genre;
    public array $actors = [];

    #---------------------------- Set & Get ---------------------------

    public function setMovieName(string $_movie_name){
        $this->movie_name = $_movie_name;
    }

    public function setMovieBudget(int $_movie_budget){
        $this->movie_budget = $_movie_budget;
    }

    public function setMovieRelease(string $_movie_release){
        $this->movie_release_date = $_movie_release;
    }

    public function setMovieGenre(string $_movie_genre){
        $genre = new Genre($_movie_genre);
        $this->movie_genre = $genre;
    }

    public function getMovieInfo(){
        #number_format(numero in entrata, numeri dopo la virgola, divisore decimali, migliaia)
        $format_budget = number_format($this->movie_budget, 2,',','.');
        return "Film : ".$this->movie_name."<br> Rilasciato in data : ".$this->movie_release_date."<br> Costato : ".$format_budget." $ <br> Genere : ".$this->movie_genre->getGenre();
    }

    public function addMovieActor(string $_actor_name,string $_actor_surname, int $_actor_age){
        $actor = new Actor();
        $actor->setActorName($_actor_name);
        $actor->setActorSurname($_actor_surname);
        $actor->setActorAge($_actor_age);
        $this->actors[] = $actor;
    }

    public function getActors(){
        $list = "<ul>";
        foreach ($this->actors as $actor) {
            $list .= "<li>" . $actor->getFullActorDesc() . "</li>";
        }
        $list .= "</ul>";
        return $list;
    }

    
}