<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('categories.index',compact('categories'));
    }

    public function show($id)
    {   $categorie = DB::table('categories')->find($id);
        $articles = DB::table('articles')
            ->join(
                'categories',
                'articles.categorie_id',
                '=',
                'categories.id')
            ->where('categorie_id',$id)
            ->select('articles.*')
            ->get();

        return view('categories.show',compact('articles','categorie'));
    }
}
