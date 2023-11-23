<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\MyArticle;
use DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function create()
    {
        return view("articles.create");
    }
    //
    public function store(ArticleRequest $request)
    {
        // $newArticle = new Article();
        // $newArticle->titre = $request->titre;
        // $newArticle->description = $request->description;
        // $newArticle->image = $request->image;
        // $newArticle->save();

        //OU bien

        $data = $request->only(['titre','description','image']);
        
        return Article::create($data);
    }
    //
    public function index(){
        $articles = Article::all();
        return view("articles.index", compact("articles"));
    }

    // public function show($id)
    // {
    //     $article = Article::find($id);
    //     return view('articles.show',compact("article"));
    // }

    // public function show(Article $id)
    // {
    //     $article = $id;
    //     return view('articles.show',compact("article"));
    // }

    public function show(Article $article)
    {
        return view('articles.show',compact("article"));
    }

    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }

    public function update(ArticleRequest $request, Article $id)
    {
        $id->titre = $request->titre;
        $id->description = $request->description;
        $id->image = $request->image;
        $id->save();
        return $id;
    }

    public function delete($id)
    {
        return Article::find($id)->delete();
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

