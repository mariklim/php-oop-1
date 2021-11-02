<?php
class Movie{
public $title;
private $genre;
private $lang;
private $year;
private $poster;

function __construct($_title, $_genre, $_lang, $_year, $_poster)
{
    $this-> title =$_title;
    $this-> genre=$_genre;
    $this-> lang =$_lang;
    $this-> year =$_year;
    $this-> poster =$_poster;
    
}

}