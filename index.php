<?php
require_once "./models/Genre.php";
require_once "./models/Actor.php";
require_once "./models/Movie.php";

echo '<br>';

# Istanzio i due oggetti Movie
$movie1 = new Movie();
$movie2 = new Movie();

# Popolo movie 1
$movie1->setMovieName("Rocky 1");
$movie1->setMovieBudget(59000000);
$movie1->setMovieRelease("1989-10-21");
$movie1->setMovieGenre("Action");
# Inserisco Attori Movie 1
$movie1->addMovieActor("Sylvester","Stallone",30);
$movie1->addMovieActor("Carl","Weathers",35);
$movie1->addMovieActor("Talia","Shire",31);
$movie1->addMovieActor("Burgess","Meredith",62);
$movie1->addMovieActor("Burt","Young",48);

# Popolo movie 2
$movie2->setMovieName("Shutter Island");
$movie2->setMovieBudget(130500000);
$movie2->setMovieRelease("2010-10-20");
$movie2->setMovieGenre("Drammatico");
# Inserisco Attori Movie 2
$movie2->addMovieActor("Leonardo","Di Caprio",32);
$movie2->addMovieActor("Mark","Rufflalo",38);
$movie2->addMovieActor("Ben","Kingsley",43);
$movie2->addMovieActor("Michelle","Williams",36);
$movie2->addMovieActor("Emily","Mortimer",35);


echo $movie1->getMovieInfo();
echo "<br><br>";
echo $movie2->getMovieInfo();
echo "<br><br>";
echo '<h3>Actors List:</h3>';
echo $movie1->getActors();
echo "<br><br>";
echo '<h3>Actors List:</h3>';
echo $movie2->getActors();
?>