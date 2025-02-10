<?php
require_once __DIR__.'/../core/Controller.php';
use App\Models\Article;
use App\Repositories\ArticleRepository;

class ArticlesController extends Controller
{
    private ArticleRepository $repo;

    public function index(){
        $repo = new ArticleRepository;
        $row = $repo->get(1);
        show($row);
        $this->view('articles');
    }
    

    public function addArticle(){
        $repo = new ArticleRepository;

        $article = new Article('The ultimate quide to data structures','the only quide you need to start with data structures');
        $repo->save($article);

        $this->view('articles');
    }
}