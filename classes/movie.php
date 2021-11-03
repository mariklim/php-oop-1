<?php
class Movie
{
    public $title;
    public $genre;
    public $season;
    public $year;
    public $poster;
    public $new = "";

    function __construct($_title, $_genre,$_season, $_lang, $_year, $_poster, $_new)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->season = $_season;
        $this->lang = $_lang;
        $this->year = $_year;
        $this->poster = $_poster;
        $this->new = $_new;
    }
    public function setNew($_year)
    {
        if ($_year >= 2021) {
            $this->new = "Nuova uscita";
        }
    }
    public function getNew()
    {
        return $this->new;
    }
}
