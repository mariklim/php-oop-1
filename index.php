<?php
require_once __DIR__."/classes/movie.php";

$you = new Movie("You", "Thriller", "un", 2018, "https://www.google.it/url?sa=i&url=https%3A%2F%2Fwww.amazon.it%2FYou-Ediz-italiana-Caroline-Kepnes%2Fdp%2F8804712732&psig=AOvVaw0KE3oJmViUB2UKJ2i3QxzM&ust=1635956327167000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCICVnrOK-vMCFQAAAAAdAAAAABAI" );

echo "<h2>Titolo: {$you->title}</h2>";