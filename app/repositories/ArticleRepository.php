<?php
namespace App\Repositories;

use App\core\Database;
use App\Repositories\ArticlerepositoriesInterface;
use App\Model\Article;
use PDO;
use PDOStatement;


class Articlerepository implements ArticlerepositoryInterface{

use Database;

public function save(Article $article){

$message = '';
$stmt = $this->getConnection()->prepare('INSERT INTO public.articles(title,content)
VALUES(:title,:content)');

if($stmt->execute([
    'title'=> $article->getTitle(),
    'content'=> $article->getContent()
])){

    return $message= 'article is added';

}

}


public function get($id){
    
    $stmt = $this->getConnection()->prepare("SELECT * FROM public.articles WHERE id= :id");

    $stmt->execute(['id'=>$id]);

    $row = $stmt->fetchObject(Article::class);
    return $row;


}

public function delete($id){

    $messagedel = '';
    $stmt = $this->getConnection()->prepare("DELETE FROM public.articles WHERE id = :id");
    
    if($stmt->execute(['id'=>$id])){
        return $messagedel = 'article deleted';
    }
}
}