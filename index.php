<?php

class Movie
{
    public $id;
    public $title;
    public $subtitle;
    public $genre;
    public $main_actor;
    public $year;
    
    public function  __construct($title, $subtitle, $genre, $main_actor, $year)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->genre = $genre;
        $this->main_actor = $main_actor;
        $this->year = $year;
    }

    public function setYear($year)
    {
        if(!is_numeric($year) || $year < 1900) return;
        $this->year = $year;
    }

    public function getSubtitle($subtitle)
    {
        if(!$subtitle){
            return ' - '; 
        }
    }
}

$film1 = new Movie('Ace Ventura', 'Missione Africa', 'Comic', 'Jim Carrey', 1994);
$film2 = new Movie('Titanic', '', 'Dramatic', 'Leonardo Di Caprio', 1997);
$film3 = new Movie('SpaceJam', 'New Legends', 'Cartoon', 'Lebron James', 2021);

$film1 = setYear();
$film1 = getSubtitle();

$film2 = setYear();
$film2 = getSubtitle();

$film3 = setYear();
$film3 = getSubtitle();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY MOVIES</title>
</head>
<body>
    <h2>Movies</h2>
    <div>
        <h3><strong><?= $film1->title ?></strong></h3>
        <p><?= $film1->subtitle ?></p>
        <p><strong>Genre</strong> : <?= $film1->genre ?></p>
        <p><strong>Year</strong> :<?= $film1->year ?></p>
    </div>
    <div>
        <h3><strong><?= $film2->title ?></strong></h3>
        <p><?= $film2->subtitle ?></p>
        <p><strong>Genre</strong> : <?= $film2->genre ?></p>
        <p><strong>Year</strong> : <?= $film2->year ?></p>
    </div>
    <div>
        <h3><strong><?= $film3->title ?></strong></h3>
        <p><?= $film3->subtitle ?></p>
        <p><strong>Genre</strong> : <?= $film3->genre ?></p>
        <p><strong>Year</strong> : <?= $film3->year ?></p>
    </div>
</body>
</html>