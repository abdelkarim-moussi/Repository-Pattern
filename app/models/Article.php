<?php
class Article
{
    public $id;
    public $title;
    public $content;

    public function __construct($id,$title,$content)
    {

        $this->id = $id;
        $this->title = $title;
        $this->content = $content;

    }

    //getters and setters
    public function getIdArticle(){
        return $this->id;
    }
    public function setIdArticle($id){
        return $this->id = $id;
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