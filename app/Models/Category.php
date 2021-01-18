<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getAllCategories(){
    return \DB::table($this->table)->get();

    }
    public function getCategoryById($id){
        $category = DB::table('categories');
        $catHasNews = DB::table('category_has_news');
        return \DB::table($this->table)->where(['id' => $id])->first();
    }
}
