<?php
require_once __DIR__."/classes/movie.php";

$you_1 = new Movie("You", "Thriller","1 stagione", "un", 2017, 'https://upload.wikimedia.org/wikipedia/en/c/c6/You_Season_1.jpg',"" );
$you_1->setNew($you_1->getYear());

$you_2 = new Movie("You", "Thriller","2 stagione", "un", 2018, 'https://upload.wikimedia.org/wikipedia/en/b/bb/You_Season_2.jpg',"" );
$you_2->setNew(2018);

$you_3 = new Movie("You", "Thriller","3 stagione", "un", 2021, 'https://upload.wikimedia.org/wikipedia/en/d/d8/Official_poster_for_You_%28season_3%29.png',"" );
$you_3->setNew(2021);

// echo "<h2>Titolo: {$you->title}</h2>";
// echo "<h3>Genere: {$you->genre}</h3>";
// echo "<h3>Stagione: {$you->season}</h3>";
// echo "<h3>Anno di uscità: {$you->year} </h3> ";
// echo "<h2>{$you->new}</h2>";
// echo '<img src="$you->poster" width="300" height="400">';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>OOP Films</title>
</head>
<body>
    <div class="container">
        <div class="card">
        <h2><?php echo $you_1->getTitle() ?></h2>
        <ul>
            <li> Genere:
        <?php echo $you_1->getGenre() ?>
            </li>
            <li> Stagione:
        <?php echo $you_1->getSeason() ?>
            </li>
            <li> Anno di uscita:
        <?php echo $you_1->getYear() ?>
        <span class="new"><?php echo $you_1->getNew() ?></span>
            </li>
        </ul>
       <img src="<?php echo $you_1->getPoster() ?>" alt="" >
        

        </div>
     
    </div>


    
</body>
</html>


