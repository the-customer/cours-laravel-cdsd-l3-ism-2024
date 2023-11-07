<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function test(){
        return "Test";
    }
    //
    public function index(){
        $articles = $this->getAllArticles();
        return view("articles.index", compact("articles"));
    }

    public function show($id)
    {
        $article = $this->getArticleById($id);
        return view('articles.show',compact("article"));
    }


    private function getArticleById($id){
        $articles = $this->getAllArticles();
        foreach ($articles as $art) {
            if($art["id"] == $id){
                return $art;
            }
        }
        return null;
    }


    private function getAllArticles(){
        $articles = [
            [
                "id" => 1,
                "titre" => "Premier Article",
                "description"   => "Description de l'article numero 1",
                "published" => rand(0,1),
            ],
            [
                "id" => 2,
                "titre" => "Deuxieme Article",
                "description"   => "Description de l'article numero 2",
                "published" => rand(0,1),
            ],
            [
                "id" => 3,
                "titre" => "Troisieme Article",
                "description"   => "Description de l'article numero 3",
                "published" => rand(0,1),
            ]   
        ];
        return $articles;
    }
}

