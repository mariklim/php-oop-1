<?php
class Movie
{
    private $title;
    private $genre;
    private $season;
    private $year;
    private $lang;
    private $poster;
    private $new = "";

    public function __construct($_title, $_genre,$_season, $_lang, $_year, $_poster, $_new)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->season = $_season;
        $this->lang = $_lang;
        $this->year = $_year;
        $this->poster = $_poster;
        $this->new = $_new;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function getSeason()
    {
        return $this->season;
    }
    public function getYear()
    {
        return $this->year;
    }

    public function setNew($_test)
    {
        if ($_test >= 2021) {
            $this->new = "Nuova uscita";
        }
    }
    public function getPoster()
    {
        return $this->poster;
    }
    public function getNew()
    {
        return $this->new;
    }


    
}
