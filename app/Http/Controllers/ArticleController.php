<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
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
        // $titre = $request->titre;
        // $titre = $request->get('titre');
        // $titre = $request->only('titre');
        $data = $request->only(['titre','description','image']);
        
        return DB::table('articles')
            ->insert($data);
    }
    //
    public function index(){
        $articles = DB::table('articles')->get();
        return view("articles.index", compact("articles"));
    }

    public function show($id)
    {
        $article = DB::table('articles')->find($id);
        // $article = DB::table('articles')
        //     ->where('id',$id)->first();
        return view('articles.show',compact("article"));
    }

    public function edit($id)
    {
        $article = DB::table('articles')->find($id);
        return view('articles.edit',compact('article'));
    }

    public function update(ArticleRequest $request, $id)
    {
        return DB::table('articles')
            ->where('id',$id)
            ->update($request->only(['titre','description','image']));
    }

    public function delete($id)
    {
        return DB::table('articles')
                ->where('id',$id)
                ->delete();
            //OU BIEN
    //     return DB::table('articles')
    //             ->delete($id);
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

