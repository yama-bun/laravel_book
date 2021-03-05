<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
