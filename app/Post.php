<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getCategory()
    {
        return $this->belongsTo("App\Category", "category_id");
    }

    public function getUser()
    {
        return $this->belongsTo("App\User", "user_id");
    }

    public function getFile()
    {
        return $this->hasMany("App\File", "post_id");
    }
}
