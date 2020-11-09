<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getAllNews(){
    return \DB::select("SELECT id, title, slug, author, description, updated_at FROM {$this->table}");

    }
    public function getNewsById($id){

    }
}
