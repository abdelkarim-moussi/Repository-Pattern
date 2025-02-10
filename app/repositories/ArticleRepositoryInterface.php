<?php
namespace App\Repositories;



use App\Models\Article;

interface ArticleRepositoryInterface {
    public function get(Article $id);
    public function save(Article $book): void;
}