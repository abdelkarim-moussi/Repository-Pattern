<?php
require_once __DIR__.'/../core/Controller.php';
require_once __DIR__.'/../models/Article.php';

use App\Repositories\ArticleRepository;

class ArticlesController extends Controller
{

    public function index(){

        $this->view('articles');
    }

    public function show($id){

        $repo = new ArticleRepository;
        $article = $repo->get($id);
        $data['article'] = $article;
        $this->view('articles',$data);
    }
    

    public function addArticle(){
        $repo = new ArticleRepository;

        $article = new Article('','The ultimate quide to data structures','the only quide you need to start with data structures');
        $message = $repo->save($article);
        $data['message'] = $message;
        $this->view('articles',$data);
    }

    public function deleteRow($id){
        $repo = new ArticleRepository;
        $message = $repo->delete($id);
    
        $data['delete'] = $message;
        $this->view('articles',$data);
    }

}