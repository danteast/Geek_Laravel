<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatHasNews extends Model
{
    use HasFactory;

    protected $table = 'category_has_news';
    public function getAllNews($id){
        return \DB::table($this->table)->get()->where($this->table->id = $this->CatHasNews->category_id);

        }
}
