<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyArticle extends Model
{
    use HasFactory;
    protected $table = 'articles';
}
