<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table("articles")
        ->insert(
            [
                    [
                        "titre" => "Un Deuxieme titre",
                        "description"   => "Description du deuxieme article",
                    ],
                    [
                        "titre" => "UN 3iem titre",
                        "description"   => "Voici une premiere description",
                    ]
                    ]
        );
    }
}
