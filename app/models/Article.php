<?php
namespace App\Models;

class Article
{
    private $id_article;
    private $title;
    private $content;

    public function __contruct($id_article,$title,$content)
    {

        $this->id_article = $id_article;
        $this->title = $title;
        $this->content = $content;

    }

    //getters and setters
    public function getIdArticle(){
        return $this->id_article;
    }
    public function setIdArticle($id_article){
        return $this->id_article = $id_article;
    }


    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

}