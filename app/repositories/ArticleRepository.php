<?php
namespace App\Repositories;
require_once __DIR__.'/../models/Article.php';
use PDO;
use App\core\Database;
use Article;

 class ArticleRepository implements ArticleRepositoryInterface
 {
    use Database;

    public function get($id):?Article {
        $stmt = $this->getConnection()->prepare("SELECT * FROM Articles WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_OBJ);

        return $row = $row ? new Article($row->id, $row->title ,$row->content) : null;

    }

    public function save(Article $article) {
        $message = '';
        $stmt = $this->getConnection()->prepare("INSERT INTO public.articles (title, content) VALUES (:title, :content)");

        if($stmt->execute([
            'title' => $article->getTitle(),
            'content' => $article->getContent()
        ])){
            $message = 'article added with success';
        }
        
        return $message;
    }

    public function delete($id) 
    {
        $succes = '';
        $stmt = $this->getConnection()->prepare("DELETE FROM public.articles WHERE id = :id");
        if($stmt->execute([$id])){
            $succes = 'succefully deleted';
        }

        return $succes;

    }
}
