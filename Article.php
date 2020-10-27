<?php

class Article {
    // @Loïc
    public $title;
    public $content;
    public $author;
    public $date;
    public $category;

    public function __construct(
        $title = null, 
        $content = null, 
        $author = null, 
        $date = null, 
        $category = null
        )
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }

    public function getDateFr() {
        // je crée un nouvel objet de type DateTime
        // j'initialise l'objet DateTime avec la date de l'article
        // cela me permet de manipuler la date pour la convertir ensuite
        $datetime = new DateTime($this->date);
        //une fois mon abjet initialisé, je peut profiter des methodes qu'il mets a disposition
        // par exemple la doc me dit que les objet DateTime possèdent une methode format()
        // je vais l'utiliser pour "formater" ou mettre en forme la date au format fr

        $formatedDate = $datetime->format("d/m/Y");
        return $formatedDate;
    }
}