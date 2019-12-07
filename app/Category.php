<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getPost()
    {
        return $this->hasOne("App\Post", "category_id", "id");
    }

    public function getPosts()
    {
        return $this->hasMany("App\Post", "category_id", "id");
    }
}
