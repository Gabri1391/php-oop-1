<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
        if(!is_numeric($year) || $year < 1900) return 'year not valid';
        $this->year = $year;
    }

    public function getSubtitle()
    {
        if($this->subtitle == ''){
            return ' - '; 
        }
        
        return $this->subtitle;
    }
}

$film1 = new Movie('Ace Ventura', 'Missione Africa', 'Comic', 'Jim Carrey', 1994);
$film2 = new Movie('Titanic', '', 'Dramatic', 'Leonardo Di Caprio', 1997);
$film3 = new Movie('SpaceJam', 'New Legends', 'Cartoon', 'Lebron James', 2021);

$film1-> setYear(1994);
$film1-> setYear(1967);
$film1-> setYear(2021);

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
        <h3><strong><?php echo $film1->title; ?></strong></h3>
        <p><?php echo $film1->getSubtitle(); ?></p>
        <p><strong>Genre</strong> : <?php echo $film1->genre; ?></p>
        <p><strong>Year</strong> : <?php echo $film1->year; ?></p>
    </div>
    <div>
        <h3><strong><?php echo $film2->title; ?></strong></h3>
        <p><?php echo $film2->getSubtitle(); ?></p>
        <p><strong>Genre</strong> : <?php echo $film2->genre; ?></p>
        <p><strong>Year</strong> : <?php echo $film2->year; ?></p>
    </div>
    <div>
        <h3><strong><?= $film3->title ?></strong></h3>
        <p><?php echo $film3->getSubtitle(); ?></p>
        <p><strong>Genre</strong> : <?php echo $film3->genre; ?></p>
        <p><strong>Year</strong> : <?php echo $film3->year; ?></p>
    </div>
</body>
</html>