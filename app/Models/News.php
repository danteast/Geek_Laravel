<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getCatNews($id){


        return \DB::table('category_has_news')
            ->join('categories', 'categories.id','=','category_has_news.category_id')
            ->join('news', 'category_has_news.news_id', '=', 'news.id')
            ->select('categories.title', 'news.id','news.title', 'news.description', 'news.author', 'news.updated_at')
            ->where('categories.id', '=', $id)
            ->get();
            //



    }
    public function getNewsById($id){

        return \DB::table($this->table)->where(['id' => $id])->first();
    }
}
