<?php

namespace App\Repositories;

use PDO;
use App\core\Database;
use App\Models\Article;


 class ArticleRepository implements ArticleRepositoryInterface
 {
    use Database;

    public function get($id) {
        $stmt = $this->getConnection()->prepare("SELECT * FROM Articles WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        return $row;
        // return $row ? new Article($row->id, $row->title ,$row->content) : null;
    }

    public function save(Article $article): void {
        $stmt = $this->getConnection()->prepare("INSERT INTO orders (title, content) VALUES (:title, :content)");

        $stmt->execute([
            'title' => $article->getTitle(),
            'content' => $article->getContent()
        ]);
    }
}
