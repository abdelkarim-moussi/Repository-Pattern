<?php
namespace App\Repositories;

use Article;
require_once __DIR__."/../Models/Article.php";

interface ArticleRepositoryInterface {
    public function get($id):?Article;
    public function save(Article $book);
    public function delete($id);
}