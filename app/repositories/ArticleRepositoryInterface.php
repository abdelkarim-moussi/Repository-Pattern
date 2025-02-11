<?php
namespace App\Repositories;

use App\Model\Article;

interface ArticlerepositoryInterface{
    public function get($id);
    public function save(Article $article);
    public function delete($id);

}