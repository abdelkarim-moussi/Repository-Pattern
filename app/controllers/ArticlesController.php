<?php
use App\Repositories\Articlerepository;

class ArticlesController extends Controller
{

    public function index(){

        $repo = new Articlerepository;
        $article = $repo->get(1);
        show($article);
    }
}